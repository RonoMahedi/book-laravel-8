<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\PublisherController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BookController;

Route::group(['prefix'=>'admin'],function(){
  Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

  Route::group(['prefix'=>'books'],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

  });
//  Route::get('/books/single-book',[BookController::class,'show'])->name('books.show');
  // Route::get('/books/categories/{slug}',[CategoriesController::class,'show'])->name('categories.show');

  Route::resource('/books',BookController::class);
  Route::resource('/authors',AuthorController::class);
  Route::resource('/publishers',PublisherController::class);
  Route::resource('/categories',CategoryController::class);
});
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
    return view('frontend/pages/index');
});
