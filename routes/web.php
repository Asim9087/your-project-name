<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [StudentController::class, 'viewform']);
Route::post('/studentprofile',[StudentController::class,'getdata']);
Route::get('/studentprofile',[StudentController::class,'getdata']);
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/dataupdate/{id}',[StudentController::class,'update'])->name('update');

Route::get('/delete/{id}',[StudentController::class,'delete_data'])->name('delete_data');
Route::get('get_data',[CustomerController::class,'index'])->name('index');
Route::post('customerprofile',[CustomerController::class,'insert_data'])->name('insert_data');
Route::get('customerview',[CustomerController::class,'fetch_data'])->name('fetch_data');

//product route//
Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('product/list',[ProductController::class,'list'])->name('product.list');
Route::post('product/insert',[ProductController::class,'insert'])->name('product.insert');
Route::get('product/list/id/{id}',[ProductController::class,'list'])->name('product.list.id');
Route::get('retrive_product',[ProductController::class,'retrive_product'])->name('retrive_product');
Route::get('edit_product/{id}',[ProductController::class,'edit_product'])->name('edit_product');
Route::post('/update_product/{id}',[ProductController::class,'update_product'])->name('update_product');


//category route//
Route::get('category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('category/list/id/{id}',[CategoryController::class,'list'])->name('category.list.id');
Route::post('category/insert',[CategoryController::class,'insert'])->name('category.insert');
Route::get('insert_category',[CategoryController::class,'insert_category'])->name('insert_category');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/update_category/{id}',[CategoryController::class,'update_category'])->name('update_category');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');