<?php

namespace App\Http\Controllers\PortfolioDb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioServiceController extends Controller
{
	public function index(){
		return view('PortfolioDb.Service.index');
	}
	public function aboutCreate(Request $request){
		//
	}
}
