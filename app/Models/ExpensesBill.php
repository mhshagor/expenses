<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\expensesModel;

class ExpensesBill extends Model{
	
    use HasFactory;
	protected $guarded =[];
	public function expenses_type(){
		return $this->belongsTo(expensesModel::class,'policy');
	}
	public function assign_user(){
		return $this->belongsTo(User::class,'assigned_id');
	}
	public function update_user(){
		return $this->belongsTo(User::class,'updated_id');
	}
	protected $casts = [
		'billing_date' => 'datetime:Y-m-d',
	];
}
