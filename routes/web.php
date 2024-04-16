<?php

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


Route::view('/', 'frontend.index');
Route::view('/category', 'frontend.category');
Route::view('/about', 'frontend.about');
Route::view('/allproducts', 'frontend.allproducts');
Route::view('/cart', 'frontend.cart');
Route::view('/checkout', 'frontend.checkout');
Route::view('/contact', 'frontend.contact');
Route::view('/faq', 'frontend.faq');
Route::view('/single-product', 'frontend.single-product');
Route::view('/wishlist', 'frontend.wishlist');
