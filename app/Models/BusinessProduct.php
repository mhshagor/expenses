<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProduct extends Model
{
    use HasFactory;
	
	protected $guarded =[];
	public function category(){
		return $this->belongsTo(BusinessCategory::class,'category_id');
	}
	public function subcategory(){
		return $this->belongsTo(BusinessSubcategory::class,'subcategory_id');
	}
	public function assign_user(){
		return $this->belongsTo(User::class,'assigned_id');
	}
	public function update_user(){
		return $this->belongsTo(User::class,'updated_id');
	}
}
