<?php

namespace App\Http\Livewire\Expenses;

use App\Models\expensesModel;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ExpensesTypeLivewire extends Component
{
	
	public $expensesTypes;
	public $addName, $addType, $editName, $editType;
	public $targetedData;
	public $dataEditModalOpen;
	
	protected function rules(){
		return [
        'addName' => ['required', 'string', 'between:2,40', Rule::unique('expenses_models','name')],
        'addType' => 'required|in:credit,debit',
		];
	}
	
	protected $messages = [
		'addName.required'=>'Type Required',
		'addName.between'=>'2-40 Charectere!',
		'addType.required'=>'Type Required',
		'addType.in'=>'Invalid Policy',
	];
	
	public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
	
	public function typeCreate(){
		$this->validate();
		expensesModel::create([
			'code'=>time(),
			'name'=>Str::title($this->addName),
			'slug'=>Str::slug($this->addName),
			'type'=>Str::title($this->addType),
			'assigned_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Save Successfully']);
		$this->mount();
	}
	
	
	
    public function dataEditAction($code){
		
		$checkData = $this->expensesTypes->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		
        $this->resetErrorBag();
		$this->dispatchBrowserEvent('edit-data');
		$this->targetedData = $checkData;
		
		$this->editName = $checkData->name;
		$this->editType = $checkData->policy;
		
		$this->dataEditModalOpen = true;
    }
	public function editData(){
		
			$this->validate([
				'editName' => ['required', 'string', 'between:2,40', Rule::unique('expenses_models','name')->ignore($this->targetedData->id)],
				'editType' => 'required|in:credit,debit',
			],[
				'editName.required'=>'Type Required',
				'editName.between'=>'2-40 Charectere!',
				'editType.required'=>'Type Required',
				'editType.in'=>'Invalid Policy',
			]);
		
		
		$this->targetedData->update([
			'name'=>Str::title($this->editName),
			'slug'=>Str::slug($this->editName),
			'policy'=>Str::title($this->editType),
			'updated_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Update Successfully']);
		$this->mount();

	}
	
	
	// Visibility
	public function visibility($code){
		$checkData = $this->expensesTypes->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		$checkData->update([
			'visibility'=> ($checkData->visibility==true ? false:true),
		]);
		return back()->with('alert', ['type'=>'success', 'message'=>'Visibility Update Successfully']);
	}
	// Delete
	public function dataDelete($code){
		$checkData = $this->expensesTypes->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		$checkData->delete();
		return back()->with('alert', ['type'=>'success', 'message'=>'Delete Successfully']);
	}
	
	public function mount(){
		$this->expensesTypes = expensesModel::with('assign_user:id,name,email','update_user:id,name')->get();
	}
	
    public function render(){
        return view('livewire.expenses.type.expenses-type-livewire');
    }
}
