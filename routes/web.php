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

Route::post('register', 'AuthenticationController@register');

Route::post('login', 'AuthenticationController@login');

Route::get('logout', 'AuthenticationController@logout');


Route::get('login', function() {
	return view('pages.login');
})->name('login');

Route::get('register', function() {
	return view('pages.register');
})->name('register');


//Admin routes
Route::get('admin', 'Admin\AdminController@index')->name('admin_home');

Route::get('admin/show{slug}', 'Admin\AdminController@showTable')->name('admin_showTable');

Route::get('admin/addNew{slug}/{pid?}', 'Admin\AdminController@addToTable')->name('admin_addToTable');

Route::post('admin/store', 'Admin\AdminController@store');

Route::post('admin/edit{slug}', 'Admin\AdminController@edit');

Route::delete('admin/delete/{id}', 'Admin\AdminController@delete');