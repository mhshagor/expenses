<?php

namespace App\Http\Controllers\Business;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\BusinessCategory;

class BusinessCategoryController extends Controller
{
    public function index(){
		$category = BusinessCategory::with('assign_user:id,name,email','update_user:id,name')->paginate(2);
		return view('Business.Category.index',['BusinessCategory'=>$category]);
	}
	public function categoryCreate (Request $request){
		
		$request->validate([
			'category_name'=>['required', 'string', 'between:2,40'],
			'category_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		],[
		]);
		
		$image = $request->file('category_image');
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
		}
		
		BusinessCategory::create([
			'code'=>time(),
			'category_name'=>Str::title($request->category_name),
			'category_image'=>$path ?? null,
			'slug'=>Str::slug($request->category_name),
			'assigned_id'=>Auth::id(),
		]);
		return back()->with('alert',['type'=>'success', 'message'=>'Added Successfully']);
	}
	// Visibility
	public function categoryVisibility(Request $request){
		$checkData = BusinessCategory::where('id',$request->visibilityId)->first();
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
	public function categoryDelete(Request $request){
		$checkData = BusinessCategory::where('id',$request->deleteId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		if($checkData->category_image && file_exists(base_path($checkData->category_image))){
			unlink(base_path($checkData->category_image));
		}
		$checkData->delete();
		
		return back()->with('alert',['type'=>'success', 'message'=>'Delete Successfully']);
	}
	// Update
	public function categoryUpdateIndex($code){
		$checkData = BusinessCategory::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		return view('Business.Category.edit',['data'=>$checkData]);
		
	}
	public function categoryUpdate (Request $request, $code){
		$checkData = BusinessCategory::where('code', $code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		$request->validate([
			'category_name'=>['required', 'string', 'between:2,40'],
			'category_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		],[]);
		
		$image = $request->file('category_image');
		
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
			
			if($checkData->category_image && file_exists(base_path($checkData->category_image))){
				unlink(base_path($checkData->category_image));
			}
		}else{
			$path = $checkData->category_image;
		}
		;
		
		$checkData->update([
			'category_name'=>Str::title($request->category_name),
			'category_image'=>$path,
			'slug'=>Str::slug($request->category_name),
			'updated_id'=>Auth::id(),
		]);
		
		return redirect(route('business-category'))->with('alert', ['type'=>'success', 'message'=>'Updated successfully']);
	}
	
}
