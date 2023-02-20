<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessCategory;
use App\Models\BusinessSubcategory;
use App\Models\BusinessProduct;

class HomeController extends Controller
{
    public function index(){
		//$subCategoryList = BusinessSubcategory::where('visibility', 1)->get();
		$categoryList = BusinessCategory::withCount('products')->where('visibility', 1)->get();
		$productList = BusinessProduct::with('category_user:category_name,id,code')->where('visibility', 1)->get()->groupBy('category_id');
		//$productList = BusinessProduct::where('visibility', 1)->get();
		return view('Frontend.home', ['categoryList' => $categoryList, 'productList' => $productList]);
	}
}
