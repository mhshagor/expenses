<?php

namespace App\Http\Livewire\Business;

// use model link only
use App\Models\BusinessCategory;
use App\Models\BusinessProduct;
use App\Models\BusinessSubcategory;

// Use Laravel link only
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Use Livewire Link only
use Livewire\WithFileUploads;
use Livewire\Component;

class BusinessProductsLivewire extends Component{
	use WithFileUploads;
	
    public $products,$categories, $subcategories ;
    public $dataAddModalOpen, $dataEditModalOpen;
    public $addName, $addDetails, $addPrice, $addQuantity, $addImage, $addCategory, $addSubcategory, $editName, $editDetails, $editPrice, $editQuantity, $editImage, $editCategory, $editSubcategory;
	public $targetedData;
	public $test;
	protected function rules(){
		return [
			'addCategory'=>'exists:business_categories,code',
			'addSubcategory'=>'exists:business_subcategories,code',
			'addName'=>['required', 'string', 'between:2,40'],
			'addDetails'=>['required', 'string', 'between:10,500'],
			'addPrice'=>['required','numeric', 'min:0'],
			'addQuantity'=>['required','numeric', 'min:0'],
			'addImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		];
	}
	
	public function updatedAddCategory($value){
        $this->subcategories = $this->categories->where('code', $value)->first()->subcategories;
    }
	
	public function updatedEditCategory($value){
        $this->subcategories = $this->categories->where('code', $value)->first()->subcategories;
    }
	
	// Data Create
	public function dataAddModal(){
        $this->resetErrorBag();
		$this->dataAddModalOpen = true;
    }
	public function dataCreate(){
		$this->validate();
		if($this->addImage){
			$extension = $this->addImage->getClientOriginalExtension();
			$newName = 'EXpro'.Str::random(10).'.'.$extension;
			$this->addImage->storeAs('business', $newName);
			$path = 'storage/app/business/'.$newName;
		}else{
			$path = null;
		}	
		
		$checkCategory = BusinessCategory::where('code', $this->addCategory)->first();
		$checkSubcategory = BusinessSubcategory::where('code',$this->addSubcategory)->first();
		
		BusinessProduct::create([
			'code' => 'EXpro'.time(),
			'category_id' => $checkCategory->id,
			'subcategory_id' => $checkSubcategory->id,
			'product_name'=>Str::title($this->addName),
			'slug'=>Str::slug($this->addName),
			'product_details'=>Str::title($this->addDetails),
			'product_price'=>$this->addPrice,
			'product_quantity'=>$this->addQuantity,
			'product_image'=>$path,
			'assigned_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Save Successfully']);
		$this->mount();
	}
	
	// Data Edit
	public function dataEditModal($code){
		
		$checkData = $this->products->where('code',$code)->first();
		if(!$checkData){
			return session()->flash('alert', ['type'=>'error', 'message'=>'Invalid Access']);
		}
		
        $this->resetErrorBag();
		$this->dataEditModalOpen = true;
		
		$this->targetedData = $checkData;
		
		$this->editCategory = $checkData->category->code;
		$this->editSubcategory = $checkData->subcategory->code;
		$this->subcategories = $this->categories->where('code',$checkData->category->code)->first()->subcategories;
		$this->editName = $checkData->product_name;
		$this->editDetails = $checkData->product_details;
		$this->editPrice = $checkData->product_price;
		$this->editQuantity = $checkData->product_quantity;
		
    }
	public function dataEdit(){
		
		$this->validate([
			'editCategory'=>'exists:business_categories,code',
			'editSubcategory'=>'exists:business_subcategories,code',
			'editName'=>['required', 'string', 'between:2,40'],
			'editDetails'=>['required', 'string', 'between:10,500'],
			'editPrice'=>['required','numeric', 'min:0'],
			'editQuantity'=>['required','numeric', 'min:0'],
			'editImage'=>['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
		]);
		
		$image = $this->editImage;
		$path = $this->targetedData->product_image;
		if($image){
			$extension = $image->getClientOriginalExtension();
			$newName = 'EXpro'.Str::random(10).'.'.$extension;
			$image->storeAs('business', $newName);
			
			if($path){
				if(Storage::exists(str_replace('storage/app/','',$path))){
					Storage::delete(str_replace('storage/app/','',$path));
				}
			}
			$path = 'storage/app/business/'.$newName;
		}
		
		$checkCategory = BusinessCategory::where('code', $this->editCategory)->first();
		$checkSubcategory = BusinessSubcategory::where('code',$this->editSubcategory)->first();
		
		$this->targetedData->update([
			'category_id' => $checkCategory->id,
			'subcategory_id' => $checkSubcategory->id,
			'product_name'=>Str::title($this->editName),
			'slug'=>Str::slug($this->editName),
			'product_details'=>Str::title($this->editDetails),
			'product_price'=>$this->editPrice,
			'product_quantity'=>$this->editQuantity,
			'product_image'=>$path,
			'updated_id'=>Auth::id(),
		]);
		
		$this->reset();
		session()->flash('alert', ['type'=>'success', 'message'=>'Update Successfully']);
		$this->mount();

	}
	
	// Visibility
	public function visibility($code){
        $checkData = BusinessProduct::where('code',$code)->first();
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
        $checkData = BusinessProduct::where('code',$code)->first();
        if(!$checkData){
			return session()->flash('alert',['type'=>'error', 'message'=>'Invalid Id']);
		}
		
		$imageUrl = $checkData->product_image;
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

	public function mount(){
		
		$this->categories = BusinessCategory::with('subcategories:id,code,category_id')->where('visibility',1)->select('id','code', 'category_name')->get();
		
		$this->subcategories = collect();
		//$this->subcategories = BusinessSubcategory::with('category:id,category_name')->select('id','code', 'subcategory_name', 'category_id')->get();
		$this->products = BusinessProduct::with('assign_user:id,name,email','update_user:id,name')->get();

	}
	
    public function render(){
        return view('livewire.business.business-products-livewire');
    }
}
