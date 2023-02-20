<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BusinessSubcategory;
use App\Models\BusinessCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BusinessSubcategoryController extends Controller
{
    public function index(){
		$category = BusinessSubcategory::with('assign_user:id,name,email','update_user:id,name')->paginate(2);
		return view('Business.Subcategory.index',['BusinessSubcategory'=>$category]);
	}
    public function subcategoryIndex(){
		$categories = BusinessCategory::where('visibility',1)->select('code', 'category_name')->get();
		return view('Business.Subcategory.create', ['categories' => $categories]);
		
	}
	public function subcategoryCreate(Request $request){
		
		$request->validate([
			'subcategory_name'=>['required', 'string', 'between:2,40'],
			'subcategory_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
			'category'=>'exists:business_categories,code',
		],[
		]);
		
		$image = $request->file('subcategory_image');
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
		}else{
			$path = null;
		}
		
		$checkCategoryCode = BusinessCategory::where('code',$request->category)->first();
		BusinessSubcategory::create([
			'code' => 'scat'.time(),
			'category_id' => $checkCategoryCode->id,
			'subcategory_name'=>Str::title($request->subcategory_name),
			'subcategory_image'=>$path,
			'slug'=>Str::slug($request->subcategory_name),
			'assigned_id'=>Auth::id(),
		]);
		
		return redirect(route('business-subcategory'))->with('alert', ['type'=>'success', 'message'=>'add successfully']);
		
	}
	// Visibility
	public function subcategoryVisibility(Request $request){
		$checkData = BusinessSubcategory::where('id',$request->visibilityId)->first();
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
	public function subcategoryDelete(Request $request){
		//return $request;
		$checkData = BusinessSubcategory::where('id',$request->deleteId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		if($checkData->subcategory_image && file_exists(base_path($checkData->subcategory_image))){
			unlink(base_path($checkData->subcategory_image));
		}
		$checkData->delete();
		
		return back()->with('alert',['type'=>'success', 'message'=>'Delete Successfully']);
	}
	// Update
	public function subcategoryUpdateIndex($code){
		$categories = BusinessCategory::select('code', 'category_name')->get();
		$checkData = BusinessSubcategory::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid id']);
		}
		return view('Business.Subcategory.edit', ['data'=>$checkData, 'categories' => $categories]);
		
	}
	
	public function subcategoryUpdate (Request $request, $code){
		
		$checkData = BusinessSubcategory::where('code', $code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		$request->validate([
			'category'=> 'required | exists:business_categories,code',
			'subcategory_name'=>['required', 'string', 'between:2,40'],
			'subcategory_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		],[]);
		
		$image = $request->file('subcategory_image');
		
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
			
			if($checkData->subcategory_image && file_exists(base_path($checkData->subcategory_image))){
				unlink(base_path($checkData->subcategory_image));
			}
		}else{
			$path = $checkData->subcategory_image;
		}
		
		$checkCategory = BusinessCategory::where('code', $request->category)->first();
		
		$checkData->update([
			'code'=>'scat'.time(),
			'category_id'=>$checkCategory->id,
			'subcategory_name'=>Str::title($request->subcategory_name),
			'subcategory_image'=>Str::title($request->subcategory_image),
			'subcategory_image'=>$path,
			'slug'=>Str::slug($request->subcategory_image),
			'updated_id'=>Auth::id(),
		]);
		
		return redirect(route('business-subcategory'))->with('alert', ['type'=>'success', 'message'=>'Updated successfully']);
	}
	

}
