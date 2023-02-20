<?php

namespace App\Http\Controllers\PortfolioDb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioHomeController extends Controller
{
    public function index(){
		return view('PortfolioDb.home.index');
	}
}
