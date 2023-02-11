<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booklist extends Model
{
    use HasFactory;
	protected $fillable = ['code','name', 'author', 'short_details','price', 'slug','visibility', 'assigned_id', 'updated_id'];
	public function assingn_user(){
		return $this->belongsTo(user::class,'assigned_id');
	}
	public function update_user(){
		return $this->belongsTo(user::class,'updated_id');
	}
}
