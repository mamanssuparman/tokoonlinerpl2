<?php

use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[LoginController::class,'index']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'auth']);

// ini untuk login
Route::post('/login',[LoginController::class,'login']);

// Rute untuk ke halaman dashboard
Route::get('/dashboard',function(){
    return view('pagedashboard');
});

Route::resource('/categoryproduct',CategoryProductController::class);

// Product

Route::resource('/products',ProductController::class);