<?php

namespace App\Http\Controllers\PortfolioDb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\portfolioAbout;

class PortfolioAboutController extends Controller
{
    public function index(){
		$about = portfolioAbout::with(
			'assigned_user:id,name,email','updated_user:id,name'
		)->get();
		return view('PortfolioDb.About.index',['about'=>$about]);
	}
    public function aboutCreate(Request $request){
		
		$request->validate([
			'title' => ['required'],
			'score' => ['required','numeric', 'min:0', 'max:100'],
		],[
		]);
		portfolioAbout::create([
			'code'=> time(),
			'title'=> Str::title($request->title),
			'score'=> $request->score,
			'slug'=> Str::slug($request->title),
			'assigned_id'=> Auth::id(),
		]);
		return back()->with('alert',['type'=>'success', 'message'=>'Added Successfully']);
	}
}
