<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


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


Route::get('/',[HomeController::class, 'index'] );
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/lien-he', [ContactController::class,'index']);
Route::get('/dang-nhap', [LoginController::class, 'index']);
Route::get('/gio-hang', [CartController::class,'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/add-category', [CategoryController::class, 'add_cat']);
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);

