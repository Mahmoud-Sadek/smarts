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
    return view('home');
});

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('/category','CategoryController');

Route::resource('/subcategory','SubController');

Route::resource('/offer','OfferController');

Route::resource('/brand','BrandController');

Route::resource('/product','ProductController');


Route::resource('/admin','AdminController');


Route::resource('/order','OrederController');

Route::resource('/user','FrontUsers');

Route::resource('/carting','CartingController');

// Route::resource('/carts','CartController');

// Route::resource('/copon','');

// Route::resource('/favorite','');

// Route::resource('/info','InfoController');

// Route::resource('/spectialpro','specialpro');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
