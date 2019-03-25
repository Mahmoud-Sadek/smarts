<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// its so important App\ + name of model class country extends Model

use App\User;
use App\model\Offer;
use App\model\Brand;
use App\model\Cart;
use App\model\Category;
use App\model\Color_image;
use App\model\Copon;
use App\model\Favorite;
use App\model\Product;
use App\model\Size;
use App\model\Adress;
use App\model\Review;




class ApiController extends Controller
{

// ****************************************************************************
      //get offers *************************
            public function offer_api($lang)
            {
              if ($lang == 'ar') {

                $offer = Offer::select('id',
                                       'title_ar AS title',
                                       'image',
                                       'description_ar AS description',
                                       'category_id',
                                       'time')->get();

                if ($offer) {

                 return  $data = response()->json( ['data' => $offer ,
                                             'status' => 'true',
                                            'message' => 'success' ]);

                }else {

                  return   $data = response()->json( ['[]' ,
                                               'status' => 'false',
                                              'message' => 'failed' ]);

                }

              }else {
                $offer = Offer::select('id',
                                       'title_en AS title',
                                       'image',
                                       'description_en AS description',
                                       'category_id',
                                       'time')->get();

                if ($offer) {

                 return  $data = response()->json( ['data' => $offer ,
                                             'status' => 'true',
                                            'message' => 'success' ]);

                }else {

                  return   $data = response()->json( ['[]' ,
                                               'status' => 'false',
                                              'message' => 'failed' ]);

                }
              }


            }

             // offer by cat_id
            public function offer_cat($cat_id, $lang)
            {
              if ($lang =='ar') {

                $offer = Offer::select('id',
                                       'title_ar AS title',
                                       'image',
                                       'description_ar AS description',
                                       'category_id',
                                       'time')->where('category_id', $cat_id)->get();

                if ($offer) {

                 return  $data = response()->json( ['data' => $offer ,
                                             'status' => 'true',
                                            'message' => 'success' ]);

                }else {

                  return   $data = response()->json( ['[]' ,
                                               'status' => 'false',
                                              'message' => 'failed' ]);

                } //end

              }else {
                $offer = Offer::select('id',
                                       'title_en AS title',
                                       'image',
                                       'description_en AS description',
                                       'category_id',
                                       'time')->where('category_id', $cat_id)->get();

                if ($offer) {

                 return  $data = response()->json( ['data' => $offer ,
                                             'status' => 'true',
                                            'message' => 'success' ]);

                }else {

                  return   $data = response()->json( ['[]' ,
                                               'status' => 'false',
                                              'message' => 'failed' ]);

                } //end
              }


            }


// ****************************************************************************
        //get category *************************
              public function categories_api($lang)
              {


                if ($lang == 'ar') {

                  $cat = Category::select('id',
                                         'title_ar AS title',
                                         'image',
                                         'time',
                                         'parent_id',
                                         'son_id')->get();

                  if ($cat) {

                   return  $data = response()->json( ['data' => $cat ,
                                               'status' => 'true',
                                              'message' => 'success' ]);

                  }else {

                    return   $data = response()->json( ['[]' ,
                                                 'status' => 'false',
                                                'message' => 'failed' ]);

                  }//end

                }else {

                  $cat = Category::select('id',
                                         'title_en AS title',
                                         'image',
                                         'time',
                                         'parent_id',
                                         'son_id')->get();

                  if ($cat) {

                   return  $data = response()->json( ['data' => $cat ,
                                               'status' => 'true',
                                              'message' => 'success' ]);

                  }else {

                    return   $data = response()->json( ['[]' ,
                                                 'status' => 'false',
                                                'message' => 'failed' ]);

                  }//end

                }


              }

              // category by parent_id
              public function cat_parent($parent_id, $lang)
              {
                if ($lang == 'ar') {

                      $pro = Category::select('id',
                                             'title_ar AS title',
                                             'image',
                                             'time',
                                             'parent_id',
                                             'son_id')->where('parent_id', $parent_id)->get();

                      if ($pro) {

                       return  $data = response()->json( ['data' => $pro ,
                                                   'status' => 'true',
                                                  'message' => 'success' ]);

                      }else {

                        return   $data = response()->json( ['[]' ,
                                                     'status' => 'false',
                                                    'message' => 'failed' ]);

                      }//end

                }else {

                                        $pro = Category::select('id',
                                                               'title_en AS title',
                                                               'image',
                                                               'time',
                                                               'parent_id',
                                                               'son_id')->where('parent_id', $parent_id)->get();

                                        if ($pro) {

                                         return  $data = response()->json( ['data' => $pro ,
                                                                     'status' => 'true',
                                                                    'message' => 'success' ]);

                                        }else {

                                          return   $data = response()->json( ['[]' ,
                                                                       'status' => 'false',
                                                                      'message' => 'failed' ]);

                                        }
                }


              }


// ****************************************************************************
              //get product *************************
                    public function product_api($lang)
                    {
                      if ($lang == 'ar') {

                        $pro = Product::select('id',
                                               'name_ar AS name',
                                               'price',
                                               'offer_price',
                                               'image1',
                                               'image2',
                                               'image3',
                                               'image4',
                                               'image5',
                                               'quantity',
                                               'selling_quantity',
                                               'infromation_ar AS infromation',
                                               'likes',
                                               'sku',
                                               'detail_ar AS detail',
                                               'freeshing',
                                               'discount',
                                               'links',
                                               'publisher',
                                               'offer_id',
                                               'category_id',
                                               'brand_id',
                                               'time')->get();

                        if ($pro) {

                         return  $data = response()->json( ['data' => $pro ,
                                                     'status' => 'true',
                                                    'message' => 'success' ]);

                        }else {

                          return   $data = response()->json( ['[]' ,
                                                       'status' => 'false',
                                                      'message' => 'failed' ]);

                        } //end

                      }else {
                        $pro = Product::select('id',
                                               'name_en AS name',
                                               'price',
                                               'offer_price',
                                               'image1',
                                               'image2',
                                               'image3',
                                               'image4',
                                               'image5',
                                               'quantity',
                                               'selling_quantity',
                                               'infromation_en AS infromation',
                                               'likes',
                                               'detail_en AS detail',
                                               'freeshing',
                                               'discount',
                                               'links',
                                               'sku',
                                               'publisher',
                                               'offer_id',
                                               'category_id',
                                               'brand_id',
                                               'time')->get();

                        if ($pro) {

                         return  $data = response()->json( ['data' => $pro ,
                                                     'status' => 'true',
                                                    'message' => 'success' ]);

                        }else {

                          return   $data = response()->json( ['[]' ,
                                                       'status' => 'false',
                                                      'message' => 'failed' ]);

                        } //end
                      }


                    }

                    // product by cat_id
                    public function pro_cat($cat_id, $lang)
                    {

                      if ($lang == 'ar') {

                        $pro = Product::select('id',
                                               'name_ar AS name',
                                               'price',
                                               'offer_price',
                                               'image1',
                                               'image2',
                                               'image3',
                                               'image4',
                                               'image5',
                                               'quantity',
                                               'selling_quantity',
                                               'infromation_ar AS infromation',
                                               'likes',
                                               'detail_ar AS detail',
                                               'freeshing',
                                               'discount',
                                               'links',
                                               'sku',
                                               'publisher',
                                               'offer_id',
                                               'category_id',
                                               'brand_id',
                                               'time')->where('category_id', $cat_id)->get();

                        if ($pro) {

                         return  $data = response()->json( ['data' => $pro ,
                                                     'status' => 'true',
                                                    'message' => 'success' ]);

                        }else {

                          return   $data = response()->json( ['[]' ,
                                                       'status' => 'false',
                                                      'message' => 'failed' ]);

                        } //end

                      }else {
                        $pro = Product::select('id',
                                               'name_en AS name',
                                               'price',
                                               'offer_price',
                                               'image1',
                                               'image2',
                                               'image3',
                                               'image4',
                                               'image5',
                                               'quantity',
                                               'selling_quantity',
                                               'infromation_en AS infromation',
                                               'likes',
                                               'detail_en AS detail',
                                               'freeshing',
                                               'discount',
                                               'links',
                                               'sku',
                                               'publisher',
                                               'offer_id',
                                               'category_id',
                                               'brand_id',
                                               'time')->where('category_id', $cat_id)->get();

                        if ($pro) {

                         return  $data = response()->json( ['data' => $pro ,
                                                     'status' => 'true',
                                                    'message' => 'success' ]);

                        }else {

                          return   $data = response()->json( ['[]' ,
                                                       'status' => 'false',
                                                      'message' => 'failed' ]);

                        } //end
                      }



                    }


                    // product by id
                    public function pro_id($id, $lang)
                    {

                          if ($lang == 'ar') {

                            $pro = Product::select('id',
                                                   'name_ar AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_ar AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_ar AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('id', $id)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end

                          }else {
                            $pro = Product::select('id',
                                                   'name_en AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_en AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_en AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('id', $id)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end
                          } ////////////////


                    }


                    // product by sku
                    public function pro_sku($sku, $lang)
                    {

                          if ($lang == 'ar') {

                            $pro = Product::select('id',
                                                   'name_ar AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_ar AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_ar AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('sku', $sku)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end

                          }else {
                            $pro = Product::select('id',
                                                   'name_en AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_en AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_en AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('sku', $sku)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end
                          } ////////////////


                    }


                    // product by offer_id
                    public function pro_offer_id($offer_id, $lang)
                    {

                          if ($lang == 'ar') {

                            $pro = Product::select('id',
                                                   'name_ar AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_ar AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_ar AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('offer_id', $offer_id)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end

                          }else {
                            $pro = Product::select('id',
                                                   'name_en AS name',
                                                   'price',
                                                   'offer_price',
                                                   'image1',
                                                   'image2',
                                                   'image3',
                                                   'image4',
                                                   'image5',
                                                   'quantity',
                                                   'selling_quantity',
                                                   'infromation_en AS infromation',
                                                   'likes',
                                                   'sku',
                                                   'detail_en AS detail',
                                                   'freeshing',
                                                   'discount',
                                                   'links',
                                                   'publisher',
                                                   'offer_id',
                                                   'category_id',
                                                   'brand_id',
                                                   'time')->where('offer_id', $offer_id)->get();

                            if ($pro) {

                             return  $data = response()->json( ['data' => $pro ,
                                                         'status' => 'true',
                                                        'message' => 'success' ]);

                            }else {

                              return   $data = response()->json( ['[]' ,
                                                           'status' => 'false',
                                                          'message' => 'failed' ]);

                            } //end
                          } ////////////////


                    }


                    // product by brand_id
                    public function pro_brand_id($brand_id, $lang)
                    {

                            if ($lang == 'ar') {

                              $pro = Product::select('id',
                                                     'name_ar AS name',
                                                     'price',
                                                     'offer_price',
                                                     'image1',
                                                     'image2',
                                                     'image3',
                                                     'image4',
                                                     'image5',
                                                     'quantity',
                                                     'selling_quantity',
                                                     'infromation_ar AS infromation',
                                                     'likes',
                                                     'sku',
                                                     'detail_ar AS detail',
                                                     'freeshing',
                                                     'discount',
                                                     'links',
                                                     'publisher',
                                                     'offer_id',
                                                     'category_id',
                                                     'brand_id',
                                                     'time')->where('brand_id', $brand_id)->get();

                              if ($pro) {

                               return  $data = response()->json( ['data' => $pro ,
                                                           'status' => 'true',
                                                          'message' => 'success' ]);

                              }else {

                                return   $data = response()->json( ['[]' ,
                                                             'status' => 'false',
                                                            'message' => 'failed' ]);

                              } //end

                            }else {
                              $pro = Product::select('id',
                                                     'name_en AS name',
                                                     'price',
                                                     'offer_price',
                                                     'image1',
                                                     'image2',
                                                     'image3',
                                                     'image4',
                                                     'image5',
                                                     'quantity',
                                                     'selling_quantity',
                                                     'infromation_en AS infromation',
                                                     'likes',
                                                     'sku',
                                                     'detail_en AS detail',
                                                     'freeshing',
                                                     'discount',
                                                     'links',
                                                     'publisher',
                                                     'offer_id',
                                                     'category_id',
                                                     'brand_id',
                                                     'time')->where('brand_id', $brand_id)->get();

                              if ($pro) {

                               return  $data = response()->json( ['data' => $pro ,
                                                           'status' => 'true',
                                                          'message' => 'success' ]);

                              }else {

                                return   $data = response()->json( ['[]' ,
                                                             'status' => 'false',
                                                            'message' => 'failed' ]);

                              } //end
                            } ////////////////



                    }


// ****************************************************************************
        //get favourite *************************


        // ****************************************************************************
                //get cart *************************
                // adress ****************************************
                public function favourite_api($lang)
                {

                   if ($lang == 'ar') {

                     $address = Favorite::select('id',
                                            'user_id',
                                            'product_id',
                                            'time')->get();

                     if ($address) {

                      return  $data = response()->json( ['data' => $address ,
                                                  'status' => 'true',
                                                 'message' => 'success' ]);

                     }else {

                       return   $data = response()->json( ['[]' ,
                                                    'status' => 'false',
                                                   'message' => 'failed' ]);

                     } //end

                   }else {

                     $address = Favorite::select('id',
                                            'user_id',
                                            'product_id',
                                            'time')->get();

                     if ($address) {

                      return  $data = response()->json( ['data' => $address ,
                                                  'status' => 'true',
                                                 'message' => 'success' ]);

                     }else {

                       return   $data = response()->json( ['[]' ,
                                                    'status' => 'false',
                                                   'message' => 'failed' ]);

                     } //end

                   }

                }


        // favourite ****************************************
        public function add_favourite_api(Request $request)
        {

              $favourite = new Favorite();
              $favourite->id           = $request->input('id');
              $favourite->user_id      = $request->input('user_id');
              $favourite->product_id   = $request->input('product_id');
              $favourite->time         = $request->input('time');

              $result = $favourite->save();

              if ($result) {

                // echo "status : true";
                // echo "message : data had been inserted";
                return response()->json( ['data' => '[]',
                                          'status' => 'true',
                                          'message' => 'data had been inserted' ]);

              }else {

                return response()->json( ['data' => '[]',
                                          'status' => 'false',
                                          'message' => 'data already had been inserted' ]);

              }

        }

        public function favourite_userid(Request $request)
        {

          $user_id     = $request->input('user_id');

          $data = Favorite::select('*')->where('user_id', $user_id) ->get();


                    if ($data) {
                      return  $data = response()->json( ['data' => $data ,
                                                  'status' => 'true',
                                                 'message' => 'success' ]);

                     }else {

                       return   $data = response()->json( ['[]' ,
                                                    'status' => 'false',
                                                   'message' => 'failed' ]);

                     } //end


        }

        // delete
        public function del_favourite(Request $request)
        {

          $user_id     = $request->input('user_id');
          $product_id  = $request->input('product_id');

          $data = Favorite::select('id')->where([
                                                    ['user_id', '=', $user_id],
                                                    ['product_id', '=', $product_id]
                                                 ]) ->delete();




                    if ($data) {
                      return response()->json( ['data' => '[]',
                                                'status' => 'true',
                                                'message' => 'data had been Deleted' ]);

                    }else {

                      // echo "status : true";
                      // echo "message : data had been inserted";
                      return response()->json( ['data' => '[]',
                                                'status' => 'false',
                                                'message' => 'data already had been Deleted' ]);

                    }


        }



// ****************************************************************************
        //get cart *************************
        // adress ****************************************
        public function cart_api($lang)
        {

           if ($lang == 'ar') {

             $address = Cart::select('id',
                                    'user_id',
                                    'product_id',
                                    'time',
                                    'quantity')->get();

             if ($address) {

              return  $data = response()->json( ['data' => $address ,
                                          'status' => 'true',
                                         'message' => 'success' ]);

             }else {

               return   $data = response()->json( ['[]' ,
                                            'status' => 'false',
                                           'message' => 'failed' ]);

             } //end

           }else {

             $address = Cart::select('id',
                                    'user_id',
                                    'product_id',
                                    'time',
                                    'quantity')->get();

             if ($address) {

              return  $data = response()->json( ['data' => $address ,
                                          'status' => 'true',
                                         'message' => 'success' ]);

             }else {

               return   $data = response()->json( ['[]' ,
                                            'status' => 'false',
                                           'message' => 'failed' ]);

             } //end

           }

        }

        // cart ****************************************
        public function add_cart_api(Request $request)
        {

              $cart = new Cart();
              $cart->id           = $request->input('id');
              $cart->user_id      = $request->input('user_id');
              $cart->product_id   = $request->input('product_id');
              $cart->time         = $request->input('time');
              $cart->quantity     = $request->input('quantity');

              $result = $cart->save();

              if ($result) {

                // echo "status : true";
                // echo "message : data had been inserted";
                return response()->json( ['data' => '[]',
                                          'status' => 'true',
                                          'message' => 'data had been inserted' ]);

              }else {

                return response()->json( ['data' => '[]',
                                          'status' => 'false',
                                          'message' => 'data already had been inserted' ]);

              }

        }


        public function cart_userid(Request $request)
        {

          $user_id     = $request->input('user_id');

          $data = Cart::select('*')->where('user_id', $user_id) ->get();


          if ($data) {
            return  $data = response()->json( ['data' => $data ,
                                        'status' => 'true',
                                       'message' => 'success' ]);

           }else {

             return   $data = response()->json( ['[]' ,
                                          'status' => 'false',
                                         'message' => 'failed' ]);

           } //end



        }

        // delete carts
        public function del_cart(Request $request)
        {

          $user_id     = $request->input('user_id');

          $data = Cart::select('id')->where('user_id', $user_id ) ->delete();




                    if ($data) {
                      return response()->json( ['data' => '[]',
                                                'status' => 'true',
                                                'message' => 'data had been Deleted' ]);

                    }else {

                      // echo "status : true";
                      // echo "message : data had been inserted";
                      return response()->json( ['data' => '[]',
                                                'status' => 'false',
                                                'message' => 'data already had been Deleted' ]);

                    }


        }




// ****************************************************************************
        //adress  *************************


        // adress ****************************************
        public function adress_api($lang)
        {

           if ($lang == 'ar') {

             $address = Adress::select('id',
                                    'country',
                                    'state',
                                    'city',
                                    'street',
                                    'address_detail_ar AS address_detail',
                                    'nearst_landman',
                                    'location_type',
                                    'mobile_number1',
                                    'mobile_number2',
                                    'shopping_note',
                                    'whatsapp',
                                    'user_id')->get();

             if ($address) {

              return  $data = response()->json( ['data' => $address ,
                                          'status' => 'true',
                                         'message' => 'success' ]);

             }else {

               return   $data = response()->json( ['[]' ,
                                            'status' => 'false',
                                           'message' => 'failed' ]);

             } //end

           }else {

             $address = Adress::select('id',
                                    'country',
                                    'state',
                                    'city',
                                    'street',
                                    'address_detail_en AS address_detail',
                                    'nearst_landman',
                                    'location_type',
                                    'mobile_number1',
                                    'mobile_number2',
                                    'shopping_note',
                                    'whatsapp',
                                    'user_id')->get();

             if ($address) {

              return  $data = response()->json( ['data' => $address ,
                                          'status' => 'true',
                                         'message' => 'success' ]);

             }else {

               return   $data = response()->json( ['[]' ,
                                            'status' => 'false',
                                           'message' => 'failed' ]);

             } //end

           }

        }

           //adress by user_id
          public function adress_user($user_id, $lang)
          {

                       if ($lang == 'ar') {

                         $address = Adress::select('id',
                                                'country',
                                                'state',
                                                'city',
                                                'street',
                                                'address_detail_ar AS address_detail',
                                                'nearst_landman',
                                                'location_type',
                                                'mobile_number1',
                                                'mobile_number2',
                                                'shopping_note',
                                                'whatsapp',
                                                'user_id')->where('user_id', $user_id)->get();

                         if ($address) {

                          return  $data = response()->json( ['data' => $address ,
                                                      'status' => 'true',
                                                     'message' => 'success' ]);

                         }else {

                           return   $data = response()->json( ['[]' ,
                                                        'status' => 'false',
                                                       'message' => 'failed' ]);

                         } //end

                       }else {

                         $address = Adress::select('id',
                                                'country',
                                                'state',
                                                'city',
                                                'street',
                                                'address_detail_en AS address_detail',
                                                'nearst_landman',
                                                'location_type',
                                                'mobile_number1',
                                                'mobile_number2',
                                                'shopping_note',
                                                'whatsapp',
                                                'user_id')->where('user_id', $user_id)->get();

                         if ($address) {

                          return  $data = response()->json( ['data' => $address ,
                                                      'status' => 'true',
                                                     'message' => 'success' ]);

                         }else {

                           return   $data = response()->json( ['[]' ,
                                                        'status' => 'false',
                                                       'message' => 'failed' ]);

                         } //end

                       }



          }

          // add_address_api ****************************************
          public function add_address_api(Request $request)
          {

                $address = new Adress();
                $address->id              = $request->input('id');
                $address->country         = $request->input('country');
                $address->state           = $request->input('state');
                $address->city            = $request->input('city');
                $address->street          = $request->input('street');
                $address->address_detail  = $request->input('address_detail');
                $address->nearst_landman  = $request->input('nearst_landman');
                $address->location_type   = $request->input('location_type');
                $address->mobile_number1  = $request->input('mobile_number1');
                $address->mobile_number2  = $request->input('mobile_number2');
                $address->shopping_note   = $request->input('shopping_note');
                $address->whatsapp        = $request->input('whatsapp');
                $address->user_id         = $request->input('user_id');

                $result = $address->save();

                if ($result) {

                  // echo "status : true";
                  // echo "message : data had been inserted";
                  return response()->json( ['data' => '[]',
                                            'status' => 'true',
                                            'message' => 'data had been inserted' ]);

                }else {

                  return response()->json( ['data' => '[]',
                                            'status' => 'false',
                                            'message' => 'data already had been inserted' ]);

                }

          }

// ****************************************************************************
        //login & register  *************************



        // signup ****************************************

        public function signup_api(Request $request)
        {

          $fetch = User::where('email', $request->input('email') )->get();


        if (count($fetch) == 0) {

              $user = new User();
              $user->id          = $request->input('id');
              $user->name        = $request->input('name');
              $user->email       = $request->input('email');
              $user->password    = $request->input('password');
              // $user->country_id  = $request->input('country_id');
              // $user->gender      = $request->input('gender');
              // $user->fullname    = $request->input('fullname');
              // $user->city        = $request->input('city');
              // $user->job         = $request->input('job');
              // $user->birth_date  = $request->input('birth_date');
              // $user->phone       = $request->input('phone');
              $user->token       = sha1(time());

              // $result =
              $user->save();

              // if ($result) {

                // echo "status : true";
                // echo "message : data had been inserted";
                return response()->json( ['user_id' => $user->id ,
                                          'status' => 'true',
                                         'message' => 'data had been inserted' ]);
                                       // }

              }else {

                return response()->json( ['data' => '[]',
                                          'status' => 'false',
                                          'message' => 'data already had been inserted' ]);
              }


        }


        // login
        public function login_api(Request $request)
        {

            // rrequest email and password
              $email      = $request->input('email');
              $password   = $request->input('password');

              // $id  = $request->input('id');

            $data = User::select('id','token')
                      ->where([ ['email',$email],
                                ['password',$password]

                                  ]) ->get();


                  if ($data) {

                    if (count($data) == '') {

                      return   $data = response()->json( ['data' => '[]' ,
                                                   'status' => 'false',
                                                  'message' => 'failed' ]);
                    }

                   return  $data = response()->json( ['data' => $data ,
                                               'status' => 'true',
                                              'message' => 'success' ]);

                  }else {

                    return   $data = response()->json( ['[]' ,
                                                 'status' => 'false',
                                                'message' => 'failed' ]);
                  }

        }

        // updatelogin_api
            public function update_login_api(Request $request)
            {


                $id   = $request->input('id');


                $user = User::find($id);


                $user->id        = $request->input('id');
                $user->email     = $request->input('email');
                $user->password  = $request->input('password');


                $data = $user ->save();

                    if ($data) {

                      // echo "status : true";
                      // echo "message : data had been inserted";
                      return response()->json( ['data' => '[]',
                                                'status' => 'true',
                                                'message' => 'data had been changed' ]);

                    }else {

                      return response()->json( ['data' => '[]',
                                                'status' => 'false',
                                                'message' => 'status already had been changed' ]);

                    }

            }

        // profile
        public function profile_api(Request $request)
        {

              $id      = $request->input('id');

            $data = User::select('*')
                      ->where('id', $id) ->get();

             return response()->json(['data' => $data ]) ;

        }


        // update profile *****

        public function update_profile_api(Request $request)
        {


          $id   = $request->input('id');

          $user = User::find($id);


          $user->id          = $request->input('id');
          $user->name        = $request->input('name');
          $user->email       = $request->input('email');
          // $user->country_id  = $request->input('country_id');
          // $user->gender      = $request->input('gender');
          // $user->fullname    = $request->input('fullname');
          // $user->city        = $request->input('city');
          // $user->job         = $request->input('job');
          // $user->birth_date  = $request->input('birth_date');
          // $user->phone       = $request->input('phone');

          $data = $user ->save();

              if ($data) {

                // echo "status : true";
                // echo "message : data had been inserted";
                return response()->json( ['data' => '[]',
                                          'status' => 'true',
                                          'message' => 'data had been changed' ]);

              }else {

                return response()->json( ['data' => '[]',
                                          'status' => 'false',
                                          'message' => 'status already had been changed' ]);

              }

        }




        // // rewiews ****************************************


        // //get rewiews *************************

        public function review_api($lang)
        {
          if ($lang == 'ar') {

            $pro = Review::select('id',
                                   'user_id',
                                   'text_ar AS text',
                                   'product_id',
                                   'time')->get();

            if ($pro) {

             return  $data = response()->json( ['data' => $pro ,
                                         'status' => 'true',
                                        'message' => 'success' ]);

            }else {

              return   $data = response()->json( ['[]' ,
                                           'status' => 'false',
                                          'message' => 'failed' ]);

            }

          }else {

            $pro = Review::select('id',
                                   'user_id',
                                   'text_en AS text',
                                   'product_id',
                                   'time')->get();

            if ($pro) {

             return  $data = response()->json( ['data' => $pro ,
                                         'status' => 'true',
                                        'message' => 'success' ]);

            }else {

              return   $data = response()->json( ['[]' ,
                                           'status' => 'false',
                                          'message' => 'failed' ]);

            }

          }


        }

        // review by product_id where('product_id', $product_id)->get();
       public function review_product_id($product_id, $lang)
       {

         if ($lang == 'ar') {

           $pro = Review::select('id',
                                  'user_id',
                                  'text_ar AS text',
                                  'product_id',
                                  'time')->where('product_id', $product_id)->get();

           if ($pro) {

            return  $data = response()->json( ['data' => $pro ,
                                        'status' => 'true',
                                       'message' => 'success' ]);

           }else {

             return   $data = response()->json( ['[]' ,
                                          'status' => 'false',
                                         'message' => 'failed' ]);

           }

         }else {

           $pro = Review::select('id',
                                  'user_id',
                                  'text_en AS text',
                                  'product_id',
                                  'time')->where('product_id', $product_id)->get();

           if ($pro) {

            return  $data = response()->json( ['data' => $pro ,
                                        'status' => 'true',
                                       'message' => 'success' ]);

           }else {

             return   $data = response()->json( ['[]' ,
                                          'status' => 'false',
                                         'message' => 'failed' ]);

           }

         }


       }

       // add_review_api ****************************************
       public function add_review_api(Request $request)
       {

             $review = new Review();
             $review->user_id        = $request->input('user_id');
             $review->text_ar        = $request->input('text_ar');
             $review->text_en        = $request->input('text_en');
             $review->product_id     = $request->input('product_id');
             $review->time           = $request->input('time');


             $result = $review->save();

             if ($result) {

               // echo "status : true";
               // echo "message : data had been inserted";
               return response()->json( ['data' => '[]',
                                         'status' => 'true',
                                         'message' => 'data had been inserted' ]);

             }else {

               return response()->json( ['data' => '[]',
                                         'status' => 'false',
                                         'message' => 'data already had been inserted' ]);

             }

       }








// // test ****************************************
// //get product *************************
//       public function test()
//       {
//           $pro = Product::select('id',
//                                  'name_ar',
//                                  'name_en',
//                                  'price',
//                                  'offer_price',
//                                  'time')->get();
//
//
//
//
//
//
//
//           if ($pro) {
//
//            return  $data = response()->json( ['data' => $pro ,
//                                        'status' => 'true',
//                                       'message' => 'success' ]);
//
//           }else {
//
//             return   $data = response()->json( ['[]' ,
//                                          'status' => 'false',
//                                         'message' => 'failed' ]);
//
//           }
//
//       }
      //
      // public function testlang($lang)
      // {
      //
      //
      //   if ($lang == 'en') {
      //     $pro = Product::select('id',
      //                            'name_en AS name',
      //                            'price',
      //                            'offer_price',
      //                            'time')->get();
      //   }else {
      //     $pro = Product::select('id',
      //                            'name_ar AS name',
      //                            'price',
      //                            'offer_price',
      //                            'time')->get();
      //   }
      //
      //
      //
      //
      //
      //
      //
      //
      //     if ($pro) {
      //
      //      return  $data = response()->json( ['data' => $pro ,
      //                                  'status' => 'true',
      //                                 'message' => 'success' ]);
      //
      //     }else {
      //
      //       return   $data = response()->json( ['[]' ,
      //                                    'status' => 'false',
      //                                   'message' => 'failed' ]);
      //
      //     }
      //
      // }



} // end of class
