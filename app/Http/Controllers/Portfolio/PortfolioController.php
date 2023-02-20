<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\portfolioAbout;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	public function index(){
		$about = portfolioAbout::with(
			'assigned_user:id,name,email','updated_user:id,name'
		)->get();
		return view('Portfolio.home',['about'=>$about]);
	}
    
}
