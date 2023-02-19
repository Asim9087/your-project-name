<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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
// Route::get('/user_data',[StudentController::class,'get_data'])->name('get_data');
Route::get('get_data',[CustomerController::class,'index'])->name('index');
Route::post('customerprofile',[CustomerController::class,'insert_data'])->name('insert_data');
Route::get('customerview',[CustomerController::class,'fetch_data'])->name('fetch_data');

Route::get('add_product',[ProductController::class,'add_product'])->name('add_product');