<?php

namespace App\Http\Controllers\Expenses;

use App\Models\ExpensesModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExpensesBill;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class ExpensesBillController extends Controller
{
    public function index(){
		$expensesBills = ExpensesBill::with('expenses_type:id,name,policy', 'assign_user:id,name','update_user:id,name')->get();
		return view('expenses.bill.index',['expensesBills'=>$expensesBills]);
	}
	public function billCreateIndex(){
		$expensesTypes = expensesModel::select('code', 'name', 'policy')->get();
		return view('expenses.Bill.create', ['ExpensesTypes' => $expensesTypes]);
	}	
	public function billCreate(Request $request){
		$request->validate([
			'type'=> 'required | exists:expenses_models,code',
			'purpose'=>['required', 'string', 'between:2,100'],
			'details'=>['nullable', 'string', 'between:2,100'],
			'amount'=>['required', 'numeric', 'min:0'],
			'boucher_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
			'billing_date'=>['required', 'date', 'date_format:Y-m-d','before:'.today()->addDays(1)->format('Y-m-d')],
		],[]);
			
		$image = $request->file('boucher_image');
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('expenses', $newName);
			$path = 'storage/app/expenses/'.$newName;
			//return $path;
		}	
			$checkExpensesType = ExpensesModel::where('code', $request->type)->first();
			$expensesBill = new ExpensesBill;
			$expensesBill->code ='expb'.time();
			$expensesBill->policy = $checkExpensesType->id;
			$expensesBill->purpose = $request->purpose;
			$expensesBill->details = $request->details;
			$expensesBill->amount = $request->amount;
			$expensesBill->boucher_image = $path;
			$expensesBill->billing_date = $request->billing_date;
			$expensesBill->assigned_id = Auth::id();
			$expensesBill->save();
		
		/* 
		ExpensesBill::create([
			'code' => time(),
			'purpose' => Str::title($request->purpose),
			'details' => Str::title($request->details),
			'amount' => Str::title($request->amount),
			'boucher_image' => $path,
			'billing_date' => $request->billing_date,
			'assigned_id' => Auth::id()
		]);  */
		return redirect(route('expenses-bill'))->with('alert', ['type'=>'success', 'message'=>'add successfully']);
		
	}
	// Update
	public function billUpdateIndex($code){
		$expensesTypes = expensesModel::select('code', 'name')->get();
		$checkData = ExpensesBill::where('code',$code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		return view('expenses.bill.edit',['data'=>$checkData, 'ExpensesTypes' => $expensesTypes]);
		
		
	}
	public function billUpdate (Request $request, $code){
		$checkData = ExpensesBill::where('code', $code)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		$request->validate([
			'type'=> 'required | exists:expenses_models,code',
			'purpose'=>['required', 'string', 'between:2,100'],
			'details'=>['nullable', 'string', 'between:2,100'],
			'amount'=>['required', 'numeric', 'min:0'],
			'boucher_image'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
			'billing_date'=>['required', 'date', 'date_format:Y-m-d','before:'.today()->addDays(1)->format('Y-m-d')],
		],[]);
		
		$image = $request->file('boucher_image');
		
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('expenses', $newName);
			$path = 'storage/app/expenses/'.$newName;
			
			if(!$checkData->boucher_image){
				unlink(base_path($checkData->boucher_image));
			}
		}else{
			$path = $checkData->boucher_image;
		}
		$expensesTypes = expensesModel::select('code', 'name', 'policy')->get();
		
		$checkExpensesType = ExpensesModel::where('code', $request->type)->first();
		
		$expensesBill = ExpensesBill::find($checkData->id);
		$expensesBill->policy = $checkExpensesType->id;
		$expensesBill->purpose = $request->purpose;
		$expensesBill->details = $request->details;
		$expensesBill->amount = $request->amount;
		$expensesBill->boucher_image = $path;
		$expensesBill->billing_date = $request->billing_date;
		$expensesBill->updated_id = Auth::id();
		$expensesBill->save();
		
		return redirect(route('expenses-bill'))->with('alert', ['type'=>'success', 'message'=>'Updated successfully']);
	}
	// Delete
	public function billDelete(Request $request){
		$checkData = ExpensesBill::where('id',$request->deleteId)->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'error', 'message'=>'Invalid operation']);
		}
		if($checkData->boucher_image && file_exists(base_path($checkData->boucher_image))){
			unlink(base_path($checkData->boucher_image));
		}
		$checkData->delete();
		
		return back()->with('alert',['type'=>'success', 'message'=>'Delete Successfully']);
	}

}
