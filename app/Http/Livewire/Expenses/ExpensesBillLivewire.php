<?php

namespace App\Http\Livewire\Expenses;

// use model link only
use App\Models\expensesModel;
use App\Models\ExpensesBill;

// Use Laravel link only
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Use Livewire Link only
use Livewire\WithFileUploads;
use Livewire\Component;

class ExpensesBillLivewire extends Component{
	
	use WithFileUploads;
	
	public $addType, $addPurpose, $addDetails, $addAmount, $addBoucherImage, $addBillingDate, $editType, $editPurpose, $editDetails, $editAmount, $editBoucherImage, $editBillingDate;
	public $expensesTypes, $expensesBills;
	public $dataAddModalOpen;
	public $targetedData;
	public $dataEditModalOpen;
	
	protected function rules(){
		return [
			'addType'=> 'required | exists:expenses_models,code',
			'addPurpose'=>['required', 'string', 'between:2,100'],
			'addDetails'=>['nullable', 'string', 'between:2,100'],
			'addAmount'=>['required', 'numeric', 'min:0'],
			'addBoucherImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
			'addBillingDate'=>['required', 'date', 'date_format:Y-m-d','before:'.today()->addDays(1)->format('Y-m-d')],
		];
	}
	public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
	
    public function dataAddModal(){
        $this->resetErrorBag();
		$this->dataAddModalOpen = true;
    }
	public function dataCreate(){
		if($this->addBoucherImage){
			$extension = $this->addBoucherImage->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$this->addBoucherImage->storeAs('expenses', $newName);
			$path = 'storage/app/expenses/'.$newName;
			//return $path;
		}else{
			$path = null;
		}	
		
		$checkExpensesType = expensesModel::where('code', $this->addType)->first();
		
		ExpensesBill::create([
			'code' =>'expb'.time(),
			'policy' => $checkExpensesType->id,
			'purpose' => $this->addPurpose,
			'details' => $this->addDetails,
			'amount' => $this->addAmount,
			'boucher_image' => $path,
			'billing_date' => $this->addBillingDate,
			'assigned_id' => Auth::id(),
		]);
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Save Successfully']);
		$this->mount();
	}
	
	public function dataEditModal($code){
		
		$checkData = $this->expensesBills->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		
        $this->resetErrorBag();
		$this->targetedData = $checkData;
		
		$this->editType= $checkData->expenses_type->code;
		$this->editPurpose= $checkData->purpose;
		$this->editDetails= $checkData->details;
		$this->editAmount= $checkData->amount;
		$this->editBillingDate= $checkData->billing_date->format('Y-m-d');
		$this->dataEditModalOpen = true;
		
    }
	public function dataEdit(){
		$this->validate([
			'editType' => ['required', 'exists:expenses_models,code'],
			'editPurpose' => ['required', 'string', 'between:2,100'],
			'editDetails' => ['nullable', 'string', 'between:2,100'],
			'editAmount' => ['required', 'numeric', 'min:0'],
			'editBoucherImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
			'editBillingDate' => ['required', 'date', 'date_format:Y-m-d','before:'.today()->addDays(1)->format('Y-m-d')],
		]);
		
		$image = $this->editBoucherImage;
		$path = $this->targetedData->boucher_image;
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = Str::random(10).'.'.$extension;
			$image->storeAs('expenses', $newName);
			
			if($path){
				if(Storage::exists(str_replace('storage/app/','',$path))){
					Storage::delete(str_replace('storage/app/','',$path));
				}
			}
			$path = 'storage/app/expenses/'.$newName;
		}	
		
		$checkExpensesType = expensesModel::where('code', $this->editType)->first();
		
		$this->targetedData->update([
			'policy' => $checkExpensesType->id,
			'purpose' => $this->editPurpose,
			'details' => $this->editDetails,
			'amount' => $this->editAmount,
			'boucher_image' => $path,
			'billing_date' => $this->editBillingDate,
			'assigned_id' => Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Update Successfully']);
		$this->mount();
	}
	
	// Delete
	public function dataDelete($code){
		$checkData = $this->expensesBills->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		$imageUrl = $checkData->boucher_image;
		$checkData->delete();
		if($imageUrl){
			if(Storage::exists(str_replace('storage/app/','',$imageUrl))){
				Storage::delete(str_replace('storage/app/','',$imageUrl));
			}
		}
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Delete Successfully']);
		$this->mount();
	}
	
	public function mount(){
		$this->expensesTypes = expensesModel::select('id','code', 'name', 'policy')->get();
		$this->expensesBills = ExpensesBill::with('expenses_type:id,name,policy', 'assign_user:id,name','update_user:id,name')->get();
		$this->addBillingDate = today()->format('Y-m-d');
	}
    public function render(){
        return view('livewire.expenses.bill.expenses-bill-livewire');
    }
}
