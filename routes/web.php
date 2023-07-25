<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('area', AreaController::class)->only(['index','edit','update'])->names('area');
Route::resource('user', UserController::class)->names('user');
Route::resource('product', ProductController::class)->names('producto');
Route::resource('category', CategoryController::class)->names('category');
Route::resource('provider', ProviderController::class)->names('provider');
Route::resource('customer', CustomerController::class)->names('customer');
Route::resource('seller', SellerController::class)->names('seller');
});
