<?php

namespace App\Http\Controllers;
use App\Models\expensesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ExpensesController extends Controller
{
	// Create
    public function index(){
		$expensesTypes = expensesModel::with('assign_user:id,name,email','update_user:id,name')->get();
		return view('expenses.type.index',['expensesModel'=>$expensesTypes]);
	}
	public function typeCreate(Request $request){
		$slug = Str::slug($request->type);
		$request->validate([
			'type'=>['required', 'string', 'between:2,40', Rule::unique('expenses_models','name')->where(function($q) use($slug){return $q->where('slug', $slug);})],
			'policy'=>['required', 'in:debit,credit'],
		],[
			'type.required'=>'Type Required',
			'type.between'=>'2-40 Charectere!',
			'policy.required' => 'Required',
			'policy.in' => 'Invalid Policy',
		]);
		 expensesModel::create([
			'code'=>time(),
			'name'=>Str::title($request->type),
			'policy'=>Str::title($request->policy),
			'slug'=>Str::slug($request->type),
			'assigned_id'=>Auth::id(),
		]);
		return back()->with('alert',['type'=>'success', 'message'=>'Added Successfully']);
		/*return request ; */
	}
	// Visibility
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
	// Update
	public function typeUpdateIndex($code){
		$checkData = expensesModel::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		return view('expenses.type.edit',['data'=>$checkData]);
		
	}
	public function typeUpdate(Request $request, $code){
		$checkData = expensesModel::where('code',$code)->first();
		$slug = Str::slug($request->type);
		$request->validate([
			'type'=>['required', 'string', 'between:2,40', Rule::unique('expenses_models','name')->where(function($q) use($slug){return $q->where('slug', $slug);})->ignore($checkData->id)],
			'policy'=>['required', 'in:debit,credit'],
		],[
			'type.required'=>'Required',
			'type.between'=>'2-40 Charectere!',
			'type.unique'=>'Already Exists!',
			'policy.required' => 'Required',
			'policy.in' => 'Invalid Policy',
		]);
		$checkData->update([
			'name'=>Str::title($request->type),
			'policy'=>$request->policy,
			'slug'=>Str::slug($request->type),
			'updated_id'=>Auth::id(),
		]);
		return redirect(route('expenses-type'))->with('alert',['type'=>'success', 'message'=>'Update Successfully']);
	}
	// Delete
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
