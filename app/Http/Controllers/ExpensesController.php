<?php

namespace App\Http\Controllers;
use App\Models\expensesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ExpensesController extends Controller
{
    public function index(){
		$expensesTypes = expensesModel::with('assign_user:id,name,email','update_user:id,name')->get();
		return view('expenses.type.index',['expensesModel'=>$expensesTypes]);
	}
	public function typeCreate(Request $request){
		$request->validate([
			'type'=>['required', 'string', 'between:2,40']
		],[
			'type.required'=>'Type Required',
			'type.between'=>'2-40 Charectere!',
		]);
		 expensesModel::create([
			'code'=>time(),
			'name'=>Str::title($request->type),
			'slug'=>Str::slug($request->type),
			'assigned_id'=>Auth::id(),
		]);
		return back()->with('alert',['type'=>'success', 'message'=>'success full complete']);
		/*return request ; */
	}
	public function typeVisibility(Request $request){
		$checkData = expensesModel::where('id',$request->visibilityId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}else{
			$checkData->update([
			'visibility'=> ($checkData->visibility==true ? false: true),
			]);
		}
		return back()->with('alert',['type'=>'success', 'message'=>'Visibility Update Successfully']);
	}
	public function typeUpdateIndex($code){
		$checkData = expensesModel::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		return view('expenses.type.edit',['data'=>$checkData]);
		
	}
	public function typeUpdate(Request $request, $code){
		$checkData = expensesModel::where('code',$code)->first();
		$request->validate([
			'type'=>['required', 'string', 'between:2,40', 'unique:expenses_models,name']
		],[
			'type.required'=>'Required',
			'type.between'=>'2-40 Charectere!',
			'type.unique'=>'Already Exists!',
		]);
		$checkData->update([
			'name'=>Str::title($request->type),
			'slug'=>Str::slug($request->type),
			'updated_id'=>Auth::id(),
		]);
		return redirect(route('expenses-type'))->with('alert',['type'=>'success', 'message'=>'Update Successfully']);
	}
	public function typeDelete(Request $request){
		$checkData = expensesModel::where('id',$request->deleteId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}else{
			$checkData->delete();
		}
		return back()->with('alert',['type'=>'success', 'message'=>'Delete Successfully']);
	}
}
