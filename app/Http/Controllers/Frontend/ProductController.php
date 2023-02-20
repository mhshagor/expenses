<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessProduct;


class ProductController extends Controller
{
    public function index($code,$slug){
		$checkData = BusinessProduct::where(['code'=>$code, 'slug'=> $slug])->first();
		if(!$checkData){
			return back()->with('alert',['type'=>'success', 'message'=>'Invalid Id']);
		}
		return view('frontend.product-details.productDetails', ['productDetails' => $checkData]);
	}
}
