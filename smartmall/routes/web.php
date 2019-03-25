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
use App\model\Product;


Route::resource('/category','CategoryController');

Route::resource('/offers','OfferController');

Route::resource('/brand','BrandController');

Route::resource('/product','ProductController');

Route::resource('/carts','CartController');

Route::resource('/review','RewiewController');

Route::resource('/favorite','');

Route::resource('/info','InfoController');

Route::resource('/spectialpro','specialpro');

Route::resource('/carting','CartingController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {

          $pro = Product::paginate(4);
          return view('home')->with('pro', $pro );

});

Route::get('/aa', function () {
    return view('header');
});

Route::get('/brands', function () {
    return view('brand');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/ajaxtest', function () {
    return view('ajaxtest');
});

#################################################################

Route::get('/subcategory{id}', 'RouteController@showcategory');

Route::get('/product{id}', 'RouteController@showproduct');

Route::get('/allproduct{id}', 'RouteController@allproduct');

Route::get('/pro_details{id}', 'RouteController@showpro_details');

Route::get('/pro_offer{id}', 'RouteController@showpro_offer_details');

Route::get('/carts{id}', 'RouteController@carts');

// Route::get('/abcd', function () {

//    $data = DB::table('categories')
//    ->join('offers', 'offers.category_id', 'categories.id' )
//    ->select('categories.id')
//    ->get();



// foreach ($data as $v ) {
// 	$v->offers = DB::table('offers')->where('category_id', $v->id);
// }



//    return $data;

// });


//    // ->join('offers', 'offers.category_id', 'categories.id' )

#################################################################






Route::get('/payment', function(){


      return view('payment');


});



Route::post('/payment', function(){


            // Set your secret key: remember to change this to your live secret key in production
          // See your keys here: https://dashboard.stripe.com/account/apikeys
          \Stripe\Stripe::setApiKey("sk_test_4eC39HqLyjWDarjtT1zdp7dc");

          // Token is created using Checkout or Elements!
          // Get the payment token ID submitted by the form:
          $token = $_POST['stripeToken'];

          $charge = \Stripe\Charge::create([
          'amount' => 999,
          'currency' => 'usd',
          'description' => 'Example charge',
          'source' => $token,
          ]);


});
























#################################################################
