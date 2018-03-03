<?php

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
    return view('pages.homepage');
})->name('home');

Route::get('brandPage', function() {
	return view('pages.brandPage');
})->name('brand');

Route::get('product', function() {
	return view('pages.product');
})->name('product');

Route::get('allProducts', function() {
	return view('pages.allProducts');
})->name('allProducts');

Route::get('checkout', function() {
	return view('pages.checkout');
})->name('checkout');