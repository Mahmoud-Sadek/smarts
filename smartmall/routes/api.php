<?php

use Illuminate\Http\Request;


//offer
Route::get('/offer_api/{lang}', 'ApiController@offer_api');
Route::get('/offer_api/cat_id={cat_id}/{lang}', 'ApiController@offer_cat');

//category
Route::get('/categories_api/{lang}', 'ApiController@categories_api');
Route::get('/categories_api/parent_id={parent_id}/{lang}', 'ApiController@cat_parent');

//product
Route::get('/product_api/{lang}', 'ApiController@product_api');
Route::get('/product_api/cat={cat_id}/{lang}', 'ApiController@pro_cat');

Route::get('/product_api/id={id}/{lang}', 'ApiController@pro_id');
Route::get('/product_api/sku={sku}/{lang}', 'ApiController@pro_sku');
Route::get('/product_api/offer_id={offer_id}/{lang}', 'ApiController@pro_offer_id');
Route::get('/product_api/brand_id={brand_id}/{lang}', 'ApiController@pro_brand_id');

//favourite
Route::get('/favourite_api/{lang}', 'ApiController@favourite_api');
Route::post('/add_favourite_api', 'ApiController@add_favourite_api');
Route::post('/favourite_userid', 'ApiController@favourite_userid');
Route::post('/del_favourite', 'ApiController@del_favourite');


//cart
Route::get('/cart_api/{lang}', 'ApiController@cart_api');
Route::post('/add_cart_api', 'ApiController@add_cart_api');
Route::post('/cart_userid', 'ApiController@cart_userid');
Route::post('/del_cart', 'ApiController@del_cart');
Route::post('/update_cart_api', 'ApiController@update_cart_api');


//address
Route::get('/adress_api/{lang}', 'ApiController@adress_api');
Route::get('/adress_api/user_id={user_id}/{lang}', 'ApiController@adress_user');
Route::post('/add_address_api', 'ApiController@add_address_api');

//login && register && profile
Route::post('/signup_api', 'ApiController@signup_api');
Route::post('/login_api', 'ApiController@login_api');
Route::post('/update_login_api', 'ApiController@update_login_api');
Route::post('/profile_api', 'ApiController@profile_api');
Route::post('/update_profile_api', 'ApiController@update_profile_api');


//rewiews
Route::get('/review_api/{lang}', 'ApiController@review_api');
Route::get('/review_api/product_id={product_id}/{lang}', 'ApiController@review_product_id');
Route::post('/add_review_api', 'ApiController@add_review_api');



//orders
Route::get('/orders_api', 'ApiController@orders_api');
// Route::get('/orders_api/product_id={product_id}/{lang}', 'ApiController@orders_api');
Route::post('/add_orders_api', 'ApiController@add_orders_api');


//orders
Route::get('/orders_product_api', 'ApiController@orders_product_api');
Route::post('/add_orders_product_api', 'ApiController@add_orders_product_api');





//test
// Route::get('/test', 'ApiController@test');
// Route::get('/test/{lang}', 'ApiController@testlang');
