<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Route;
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
    return view('client.home.index');
});

Route::get('/product', function () {
    return view('client.products.products');
});

Route::get('/detail', function () {
    return view('client.products.detail');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});
Route::get('/home', function () {
    return view('client.layouts.app');
});
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
