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

Route::get('/', 'HomepageController@index')->name('home');

Route::get('brandPage', function() {
	return view('pages.brandPage');
})->name('brand');

Route::get('product/{product}', 'ProductController@index')->name('product');

Route::get('allProducts', 'AllProductsController@index')->name('allProducts');

Route::get('cart', 'CartController@index')->name('cart');

Route::post('cart/store', 'CartController@store');

Route::delete('cart/{id}', 'CartController@destroy');

Route::get('checkout', 'CheckoutController@index');

Route::post('checkout/store', 'CheckoutController@store');


Route::get('login', function() {
	return view('pages.login');
});



