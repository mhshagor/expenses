<?php

namespace App\Http\Livewire\Business;

// use model link only
use App\Models\BusinessCategory;

// Use Laravel link only
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Use Livewire Link only
use Livewire\WithFileUploads;
use Livewire\Component;



class BusinessCategoryLivewire extends Component{  
 
    use WithFileUploads;
	
    public $businessCategory;
    public $dataEditModalOpen;
    public $addName, $addImage, $editName, $editImage;
	public $targetedData;

    protected function rules(){
        return [
            'addName'=>['required','string','between:2,40',Rule::unique('business_categories','category_name')],
            'addImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }
	
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
	
	public function dataCreate(){
		if($this->addImage){
			$extension = $this->addImage->getClientOriginalExtension();
			$newName = 'EXscat'.Str::random(10).'.'.$extension;
			$this->addImage->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
		}else{
			$path = null;
		}
		
		businessCategory::create([
			'code' =>'EXcat'.time(),
			'category_name' => $this->addName,
			'slug'=>Str::slug($this->addName),
			'category_image' => $path,
			'assigned_id' => Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Save Successfully']);
		$this->mount();
	}
	
	public function dataEditModal($code){
		
		$checkData = $this->businessCategory->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		
        $this->resetErrorBag();
		$this->targetedData = $checkData;
		
		$this->editName = $checkData->category_name;
		
		$this->dataEditModalOpen = true;
		
    }
    
	public function dataEdit(){
		
		$this->validate([
			'editName' => ['required', 'string', 'between:2,40', Rule::unique('business_categories','category_name')->ignore($this->targetedData->id)],
			'editImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		]);
		
		$image = $this->editImage;
		$path = $this->targetedData->category_image;
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = 'EXcat'.Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			
			if($path){
				if(Storage::exists(str_replace('storage/app/','',$path))){
					Storage::delete(str_replace('storage/app/','',$path));
				}
			}
			$path = 'storage/app/business/'.$newName;
		}
		
		$this->targetedData->update([
			'category_name'=>Str::title($this->editName),
			'slug'=>Str::slug($this->editName),
			'category_image'=>$path,
			'updated_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Update Successfully']);
		$this->mount();

	}
	
	public function mount(){
        $this->businessCategory = BusinessCategory::with('assign_user:id,name,email','update_user:id,name')->get();
    }

    // Visibility
    public function visibility($code){
        $checkData = BusinessCategory::where('code',$code)->first();
        if(!$checkData){
			return session()->flash('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
        $checkData->update([
            'visibility'=> ($checkData->visibility== true ? false : true),
        ]);
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Visibility Update']);
        $this->mount();
    }

    // Delete
    public function dataDelete($code){
        $checkData = BusinessCategory::where('code',$code)->first();
        if(!$checkData){
			return session()->flash('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		
		$imageUrl = $checkData->category_image;
		$checkData->delete();
		if($imageUrl){
			if(Storage::exists(str_replace('storage/app/','',$imageUrl))){
				Storage::delete(str_replace('storage/app/','',$imageUrl));
			}
		}
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Visibility Update']);
        $this->mount();
    }

    public function render() {
        return view('livewire.business.business-category-livewire');
    }
}
