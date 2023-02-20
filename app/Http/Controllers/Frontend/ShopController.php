<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BusinessCategory;
use App\Models\BusinessSubcategory;
use App\Models\BusinessProduct;

class ShopController extends Controller
{
    public function index(){
		$categoryList = BusinessCategory::withCount('products')->where('visibility', 1)->get();
		$productList = BusinessProduct::where('visibility', 1)->get();
		return view('Frontend.shop.Shop', ['productList'=>$productList]);
	}
}
