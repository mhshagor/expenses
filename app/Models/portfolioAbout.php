<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolioAbout extends Model
{
    use HasFactory;
	
	protected $fillable = ['code','title','score','slug','assigned_id','updated_id'];
	public function assigned_user(){
		return $this->belongsTo(User::class,'assigned_id');
	}
	public function updated_user(){
		return $this->belongsTo(User::class,'updated_id');
	}
}
