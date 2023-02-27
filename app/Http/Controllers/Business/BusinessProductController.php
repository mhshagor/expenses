<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\BusinessProduct;
use App\Models\BusinessCategory;
use App\Models\BusinessSubcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BusinessProductController extends Controller
{
    public function index(){
		$product = BusinessProduct::with('assign_user:id,name,email','update_user:id,name')->orderBy('created_at', 'desc')->paginate(2);
		return view('Business.Product.index',['BusinessProduct'=>$product]);
	}
	public function productIndex(){
		$categories = BusinessCategory::where('visibility',1)->select('code', 'category_name')->get();
		$subcategories = BusinessSubcategory::with('category:id,category_name')->where('visibility',1)->select('code', 'subcategory_name', 'category_id')->get();
		return view('Business.Product.create', ['categories' => $categories,'subcategories' => $subcategories]);
	}
	public function productCreate(Request $request){
		$request->validate([
			'category'=>'exists:business_categories,code',
			'subcategory'=>'exists:business_subcategories,code',
			'product_name'=>['required', 'string', 'between:2,40'],
			'product_details'=>['required', 'string', 'between:10,500'],
			'product_price'=>['required','numeric', 'min:0'],
			'product_quantity'=>['required','numeric', 'min:0'],
			'product_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		],[
		]);
		
		$image = $request->file('product_image');
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('product', $newName);
			$path = 'storage/app/product/'.$newName;
		}else{
			$path = null;
		}
		
		$checkCategoryCode = BusinessCategory::where('code',$request->category)->first();
		$checkSubcategoryCode = BusinessSubcategory::where('code',$request->subcategory)->first();
		BusinessProduct::create([
			'code' => 'pdId'.time(),
			'category_id' => $checkCategoryCode->id,
			'subcategory_id' => $checkSubcategoryCode->id,
			'product_name'=>Str::title($request->product_name),
			'product_details'=>Str::title($request->product_details),
			'product_price'=>$request->product_price,
			'product_quantity'=>$request->product_quantity,
			'product_image'=>$path,
			'slug'=>Str::slug($request->product_name),
			'assigned_id'=>Auth::id(),
		]);
		return redirect(route('product-list'))->with('alert', ['type'=>'success', 'message'=>'add successfully']);
		
		
	}
	// Visibility
	public function productVisibility(Request $request){
		$checkData = BusinessProduct::where('id',$request->visibilityId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}else{
			$checkData->update([
			'visibility'=> ($checkData->visibility==true ? false : true),
			]);
		}
		return back()->with('alert',['type'=>'success', 'message'=>'Visibility Update Successfully']);
	}
	// Delete
	public function productDelete(Request $request){
		//return $request;
		$checkData = BusinessProduct::where('id',$request->deleteId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		if($checkData->product_image && file_exists(base_path($checkData->product_image))){
			unlink(base_path($checkData->product_image));
		}
		$checkData->delete();
		
		return back()->with('alert',['type'=>'success', 'message'=>'Delete Successfully']);
	}
	// Update
	public function productUpdateIndex($code){
		
		$categories = BusinessCategory::select('code', 'category_name')->get();
		$subcategories = BusinessSubcategory::select('code', 'subcategory_name')->get();
		$checkData = BusinessProduct::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid id']);
		}
		return view('Business.product.edit', ['data'=>$checkData, 'categories' => $categories, 'subcategories' => $subcategories]);
		
	}
	public function productUpdate (Request $request, $code){
		
		$checkData = BusinessProduct::where('code', $code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		$request->validate([
			'category'=>'exists:business_categories,code',
			'subcategory'=>'exists:business_subcategories,code',
			'product_name'=>['required', 'string', 'between:2,40'],
			'product_details'=>['required', 'string', 'between:10,500'],
			'product_price'=>['required','numeric', 'min:0'],
			'product_quantity'=>['required','numeric', 'min:0'],
			'product_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		],[
		]);
		
		$image = $request->file('product_image');
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('product', $newName);
			$path = 'storage/app/product/'.$newName;
			
			if($checkData->product_image && file_exists(base_path($checkData->product_image))){
				unlink(base_path($checkData->product_image));
			}
		}else{
			$path = $checkData->product_image;
		}
		
		$checkCategory = BusinessCategory::where('code', $request->category)->first();
		$checkSubcategory = BusinessSubcategory::where('code', $request->subcategory)->first();
		
		$checkData->update([
			'category_id' => $checkCategory->id,
			'subcategory_id' => $checkSubcategory->id,
			'product_name'=>Str::title($request->product_name),
			'product_details'=>Str::title($request->product_details),
			'product_price'=>$request->product_price,
			'product_quantity'=>$request->product_quantity,
			'product_image'=>$path,
			'slug'=>Str::slug($request->product_name),
			'updated_id'=>Auth::id(),
		]);
		
	return redirect(route('product-list',['code'=>$code]))->with('alert', ['type'=>'success', 'message'=>'Updated successfully']);
	}
	
    
}
