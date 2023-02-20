<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expensesModel extends Model
{
    use HasFactory;
	
	protected $fillable = ['code','name', 'slug','policy','visibility', 'assigned_id', 'updated_id'];
	public function assign_user(){
		return $this->belongsTo(User::class,'assigned_id');
	}
	public function update_user(){
		return $this->belongsTo(User::class,'updated_id');
	}
}
