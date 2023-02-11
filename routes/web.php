<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\BookListController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
	Route::get('expenses/type/all',[ExpensesController::class, 'index'])->name('expenses-type');
	Route::post('expenses/type/create',[ExpensesController::class, 'typeCreate'])->name('expenses-type-create');
	Route::post('expenses/type/visibility',[ExpensesController::class, 'typeVisibility'])->name('expenses-type-visibility');
	Route::post('expenses/type/delete',[ExpensesController::class, 'typeDelete'])->name('expenses-type-delete');
	Route::get('expenses/type/update/{code}',[ExpensesController::class, 'typeUpdateIndex'])->name('type-update');
	Route::post('expenses/type/update/{code}',[ExpensesController::class, 'typeUpdate']);
	## booklist
	Route::get('/books/list/all',[BookListController::class, 'index'])->name('book-list');
	Route::post('/books/list/create',[BookListController::class, 'listCreate'])->name('book-list-create');
	Route::post('/books/list/visibility',[BookListController::class, 'bookListVisibility'])->name('book-list-visibility');
	Route::post('/books/list/delete',[BookListController::class, 'bookListDelete'])->name('book-list-delete');
	Route::get('/books/list/update/{code}',[BookListController::class, 'bookListIndex'])->name('book-list-update');
	Route::post('/books/list/update/{code}',[BookListController::class, 'bookListUpdata']);
});
