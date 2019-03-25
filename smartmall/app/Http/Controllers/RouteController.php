<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

use App\model\Category;
use App\model\Product;
use App\model\Cart;
use App\model\Review;

class RouteController extends Controller
{

  // subcategory
    public function showcategory($id)
    {

          $cats = Category::where('parent_id', $id)->get();

          return view('subcategory')->with('cats', $cats );

    }

 // product
    public function showproduct($id)
    {

      $min_price = Input::has('min_price') ? Input::get('min_price') : null ;
      $max_price = Input::has('max_price') ? Input::get('max_price') : null ;



     if ( request()->has('price') ) {

       $pro = Product::where('price', request('price') )->paginate(20);

     }elseif (request()->has('sort') ) {

       $pro = Product::where('son_id', $id)->orderBy('name_en', request('sort'))->paginate(20);

     } elseif (isset($min_price) && isset($max_price) ) {

         $pro = Product::where('son_id' , $id)->where('price', '>=', $min_price)->where('price', '<=', $max_price)->paginate(20);

     }else {

             $pro = Product::where('son_id' , $id)->paginate(20);
     }





          $main_cats = Category::where('son_id', $id)->get();
          $cates = Category::find($id);


          return view('product')->with([
                                   'pro' => $pro,
                                   'main_cats' => $main_cats,
                                   'cates'  => $cates

          ]);

    }



    // showpro_offer_details
   public function showpro_offer_details($id)
   {

         $pro = Product::where('offer_id', $id)->get();
         $main_cats = Category::where('son_id', $id)->get();
         $cates = Category::find($id);


         return view('offers')->with([
                                  'pro' => $pro,
                                  'main_cats' => $main_cats,
                                  'cates'  => $cates

         ]);
   }





     // product details
    public function showpro_details($id)
    {

          $pro  = Product::find($id);
          $pros  = Product::paginate(6);
          $reviewss  = Review::where('product_id', $id )->get();


          return view('pro_details')->with(['pro'=> $pro,
                                             'reviewss'  =>$reviewss,
                                              'pros' => $pros ]);

    }


    // product details
   public function carts($id)
   {

         $carts = Cart::where('user_id', $id)->get();

         $totalprice = DB::table('carts')->where('user_id', $id)->sum('total_price');

         // $sum        = $totalprice * $totalqty ;


         return view('carts')->with(['carts' => $carts,
                                     'totalprice' => $totalprice ]);

   }







}
