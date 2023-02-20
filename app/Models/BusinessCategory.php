<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;
	
	protected $fillable = ['code','category_name', 'slug','category_image','visibility', 'assigned_id', 'updated_id'];
	public function assign_user(){
		return $this->belongsTo(User::class,'assigned_id');
	}
	public function update_user(){
		return $this->belongsTo(User::class,'updated_id');
	}
	public function products(){
		return $this->hasmany(BusinessProduct::class,'category_id');
	}
	
}
