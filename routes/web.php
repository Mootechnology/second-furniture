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


Route::view('/', 'frontend.index')->name('index');
Route::view('/category', 'frontend.category')->name('category');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/allproducts', 'frontend.allproducts')->name('allproducts');
Route::view('/cart', 'frontend.cart')->name('cart');
Route::view('/checkout', 'frontend.checkout')->name('checkout');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/single-product', 'frontend.single-product')->name('single-product');
Route::view('/wishlist', 'frontend.wishlist')->name('wishlist');
