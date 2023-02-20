<?php

namespace App\Http\Livewire\Business;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\BusinessCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\File;



class BusinessCategoryLivewire extends Component
{   
    use WithFileUploads;
    public $businessCategory;
    public $addName;
    public $addImage;


    protected function rules(){
        return [
            'addName'=>['required','string','between:2,40',Rule::unique('business_categories','category_name')],
            //'addImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }
   
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function saveCategories(){
        $validatedData = $this->validate();
        BusinessCategory::create([
			'code'=>time(),
			'category_name'=>Str::title($this->addName),
			//'category_image'=>'storage/app/business/'.'addImage' ?? null,
			'slug'=>Str::slug($this->addName),
			'assigned_id'=>Auth::id(),
		]);
        //File::create($validateData);
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Added Successfully']);
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
            'visibility'=> ($checkData->visibility==true ? false : true),
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
        $checkData->delete();
        $this->reset();
        session()->flash('alert',['type'=>'success', 'message'=>'Visibility Update']);
        $this->mount();
    }

    public function render() {
        return view('livewire.business.business-category-livewire');
    }
}
