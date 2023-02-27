<?php

use Illuminate\Support\Facades\Route;

// Expenses
use App\Http\Controllers\Expenses\ExpensesBillController;
use App\Http\Controllers\ExpensesController;

// Business
use App\Http\Controllers\Business\BusinessCategoryController;
use App\Http\Controllers\Business\BusinessSubcategoryController;
use App\Http\Controllers\Business\BusinessProductController;

//FrontEnd
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ShopController;

//portfolio
use App\Http\Controllers\Portfolio\PortfolioController;

//Portfolio Dashboard
use App\Http\Controllers\PortfolioDb\PortfolioDbController;
use App\Http\Controllers\PortfolioDb\PortfolioHomeController;
use App\Http\Controllers\PortfolioDb\PortfolioAboutController;
use App\Http\Controllers\PortfolioDb\PortfolioServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Portfolio Route
Route::get('/portfolio', [PortfolioController::class, 'index']);

//FrontPage Route
Route::get('/', [HomeController::class, 'index']);
Route::get('product-details/{code}/{slug}',[ProductController::class, 'index'])->name('product-details');
Route::get('shop/all',[ShopController::class, 'index'])->name('shop-all');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');


	// Livewire 
	Route::get('expenses/types',App\Http\Livewire\Expenses\ExpensesTypeLivewire::class)->name('expenses-types');
	Route::get('expenses/bills',App\Http\Livewire\Expenses\ExpensesBillLivewire::class)->name('expenses-bills');
	
	// Livewire business
	Route::get('business/categories/all',App\Http\Livewire\Business\BusinessCategoryLivewire::class)->name('business-categories');
	Route::get('business/subcategories/all',App\Http\Livewire\Business\BusinessSubcategoryLivewire::class)->name('business-subcategories');
	Route::get('business/Products/all',App\Http\Livewire\Business\BusinessProductsLivewire::class)->name('business-products');



	// Expenses Type
	Route::get('expenses/type/all',[ExpensesController::class, 'index'])->name('expenses-type');
	Route::post('expenses/type/create',[ExpensesController::class, 'typeCreate'])->name('expenses-type-create');
	Route::post('expenses/type/visibility',[ExpensesController::class, 'typeVisibility'])->name('expenses-type-visibility');
	Route::post('expenses/type/delete',[ExpensesController::class, 'typeDelete'])->name('expenses-type-delete');
	Route::get('expenses/type/update/{code}',[ExpensesController::class, 'typeUpdateIndex'])->name('type-update');
	Route::post('expenses/type/update/{code}',[ExpensesController::class, 'typeUpdate']);

	// Expenses bill
	Route::get('expenses/bill/all',[ExpensesBillController::class, 'index'])->name('expenses-bill');
	Route::get('expenses/bill/create',[ExpensesBillController::class, 'billCreateIndex'])->name('expenses-bill-create');
	Route::post('expenses/bill/create',[ExpensesBillController::class, 'billCreate']);
	Route::get('expenses/bill/update/{code}',[ExpensesBillController::class, 'billUpdateIndex'])->name('bill-update');
	Route::post('expenses/bill/update/{code}',[ExpensesBillController::class, 'billUpdate']);
	Route::post('expenses/bill/delete',[ExpensesBillController::class, 'billDelete'])->name('expenses-bill-delete');

	//Business Category
	Route::get('business/category/all',[BusinessCategoryController::class, 'index'])->name('business-category');
	Route::post('business/category/create',[BusinessCategoryController::class, 'categoryCreate'])->name('business-category-create');
	Route::post('category/visibility',[BusinessCategoryController::class, 'categoryVisibility'])->name('category-visibility');
	Route::post('category/delete',[BusinessCategoryController::class, 'categoryDelete'])->name('category-delete');
	Route::get('business/category/update/{code}',[BusinessCategoryController::class, 'categoryUpdateIndex'])->name('category-update');
	Route::post('business/category/update/{code}',[BusinessCategoryController::class, 'categoryUpdate']);

	//Business SubCategory
	Route::get('business/subcategory/all',[BusinessSubcategoryController::class, 'index'])->name('business-subcategory');
	Route::get('business/subcategory/create',[BusinessSubcategoryController::class, 'subcategoryIndex'])->name('business-subcategory-create');
	Route::post('business/subcategory/create',[BusinessSubcategoryController::class, 'subcategoryCreate']);
	Route::post('subcategory/visibility',[BusinessSubcategoryController::class, 'subcategoryVisibility'])->name('subcategory-visibility');
	Route::post('subcategory/delete',[BusinessSubcategoryController::class, 'subcategoryDelete'])->name('subcategory-delete');
	Route::get('business/subcategory/update/{code}',[BusinessSubcategoryController::class, 'subcategoryUpdateIndex'])->name('subcategory-update');
	Route::post('business/subcategory/update/{code}',[BusinessSubcategoryController::class, 'subcategoryUpdate']);


	// Product // Grouping Route
	Route::controller(BusinessProductController::class)->group(function(){
		Route::get('business/product/all','index')->name('product-list');
		Route::get('business/product/create','productIndex')->name('business-product-create');
		Route::post('business/product/create','productCreate');
		Route::post('business/product/visibility','productVisibility')->name('product-visibility');
		Route::post('business/product/delete','productDelete')->name('product-delete');
		Route::get('business/product/update/{code}','productUpdateIndex')->name('product-update');
		Route::post('business/product/update/{code}','productUpdate');
	});

	//Portfolio
	Route::get('portfolio/all', [PortfolioDbController::class, 'index'])->name('portfolio-dashboard');
	Route::get('portfolio/home', [PortfolioHomeController::class, 'index'])->name('home-page');
	// About
	Route::get('portfolio/about', [PortfolioAboutController::class, 'index'])->name('home-about');
	Route::post('portfolio/about/create',[PortfolioAboutController::class, 'aboutCreate'])->name('portfolio-about-create');
	// service
	Route::get('portfolio/service', [PortfolioServiceController::class, 'index'])->name('home-service');
	Route::post('portfolio/service/create',[PortfolioServiceController::class, 'serviceCreate'])->name('portfolio-service-create');
});
