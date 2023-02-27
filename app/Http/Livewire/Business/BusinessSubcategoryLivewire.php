<?php

namespace App\Http\Livewire\Business;

// use model link only
use App\Models\BusinessCategory;
use App\Models\BusinessSubcategory;

// Use Laravel link only
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Use Livewire Link only
use Livewire\WithFileUploads;
use Livewire\Component;

class BusinessSubcategoryLivewire extends Component
{
	use WithFileUploads;
	
    public $categories, $subcategory;
    public $businessSubcategory;
    public $dataAddModalOpen, $dataEditModalOpen;
	public $addCategory, $addName, $addImage, $editCategory, $editName, $editImage;
	public $targetedData;
	public $test;
	
	public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
	
	protected function rules(){
		return [
			'addCategory'=> 'required | exists:business_categories,code',
			'addName'=>['required', 'string', 'between:2,100'],
			'addImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		];
	}
	
	public function dataAddModal(){
        $this->resetErrorBag();
		$this->dataAddModalOpen = true;
    }
    
	public function dataCreate(){
		$this->validate();
		if($this->addImage){
			$extension = $this->addImage->getClientOriginalExtension();
			$newName = 'EXscat'.Str::random(10).'.'.$extension;
			$this->addImage->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
		}else{
			$path = null;
		}	
		
		$checkCategory = BusinessCategory::where('code', $this->addCategory)->first();
		
		BusinessSubcategory::create([
			'code' =>'EXscat'.time(),
			'category_id' => $checkCategory->id,
			'subcategory_name'=>Str::title($this->addName),
			'slug'=>Str::slug($this->addName),
			'subcategory_image'=>$path,
			'assigned_id'=>Auth::id(),
		]);
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Save Successfully']);
		$this->mount();
	}
	
	public function dataEditModal($code){
		
		$checkData = $this->businessSubcategory->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		
        $this->resetErrorBag();
		$this->targetedData = $checkData;
		
		$this->editCategory= $checkData->category->code;
		$this->editName= $checkData->subcategory_name;
		
		$this->dataEditModalOpen = true;
		
    }
	
	public function dataEdit(){
		
		$this->validate([
			'editCategory'=> 'required | exists:business_categories,code',
			'editName'=>['required', 'string', 'between:2,100', Rule::unique('business_subcategories','subcategory_name')->ignore($this->targetedData->id)],
			'editImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		]);
		
		$image = $this->editImage;
		$path = $this->targetedData->subcategory_image;
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = 'EXscat'.Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			
			if($path){
				if(Storage::exists(str_replace('storage/app/','',$path))){
					Storage::delete(str_replace('storage/app/','',$path));
				}
			}
			$path = 'storage/app/business/'.$newName;
		}
		
		$this->targetedData->update([
		
			'subcategory_name'=>Str::title($this->editName),
			'slug'=>Str::slug($this->editName),
			'subcategory_image'=>$path,
			'updated_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Update Successfully']);
		$this->mount();

	}
	
	public function mount(){
		$this->businessSubcategory = BusinessSubcategory::with('assign_user:id,name,email','update_user:id,name')->get();
		
		$this->categories = BusinessCategory::select('id','code', 'category_name')->get();
		
	}
	
	// Visibility
    public function visibility($code){
        $checkData = BusinessSubcategory::where('code',$code)->first();
        if(!$checkData){
			return session()->flash('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
        $checkData->update([
            'visibility'=> ($checkData->visibility==true ? false : true),
        ]);
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Visibility Update']);
        $this->mount();
    }
	
	// Delete
    public function dataDelete($code){
        $checkData = BusinessSubcategory::where('code',$code)->first();
        if(!$checkData){
			return session()->flash('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		
		$imageUrl = $checkData->subcategory_image;
		$checkData->delete();
		if($imageUrl){
			if(Storage::exists(str_replace('storage/app/','',$imageUrl))){
				Storage::delete(str_replace('storage/app/','',$imageUrl));
			}
		}
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Delete']);
        $this->mount();
    }

    public function render(){
        return view('livewire.business.business-subcategory-livewire');
    }
}
