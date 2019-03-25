<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Product;
use App\User;
use Auth;


class ProductController extends Controller
{

  public function __construct(){

     $this->middleware('auth');

}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $user = User::find(Auth::user()->isadmin);
             if ( Auth::user()->isadmin == 6  ) {
               $pro = Product::where('user_id', Auth::user()->id )->get();
                return view('products.product')->with('pro', $pro);
             }else {
               $pro = Product::all();
                return view('products.product')->with('pro', $pro);
             }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $this->validate($request, [

               'name_ar' => 'required',
               'name_en' => 'required',
               'price' => 'required',
               'offer_price' => 'required',
               'quantity' => 'required',
               'brand_id' => 'required',
               'cat_id' => 'required',
               'offer_id' => 'required',
               // 'selling_quantity' => 'required',
               'infromation_ar' => 'required',
               'infromation_en' => 'required',
               'detail_ar' => 'required',
               'detail_en' => 'required',
               // 'time' => 'required',
               'image1' => 'required',

                ]);

                  $product = new Product();

                  $product ->name_ar          = $request->input('name_ar');
                  $product ->name_en          = $request->input('name_en');
                  $product ->price            = $request->input('price');
                  $product ->offer_price      = $request->input('offer_price');
                  $product ->quantity         = $request->input('quantity');
                  $product ->category_id      = $request->input('cat_id');
                  $product ->son_id           = $request->input('son_id');
                  $product ->brand_id         = $request->input('brand_id');
                  $product ->offer_id         = $request->input('offer_id');
                  // $product ->selling_quantity = $request->input('selling_quantity');
                  $product ->infromation_ar   = $request->input('infromation_ar');
                  $product ->infromation_en   = $request->input('infromation_en');
                  $product ->detail_ar        = $request->input('detail_ar');
                  $product ->detail_en        = $request->input('detail_en');
                  $product ->user_id          = $request->input('user_id');
                  // $product ->time             = $request->input('time');

                  if ( $request ->hasFile('image1') ) {

                       $fileObject = $request->file('image1');
                       $extension  = $fileObject->getClientOriginalExtension();
                       $mimeType   = $fileObject->getClientMimeType ();
                       $fileName   = $fileObject->getClientOriginalName();
                       $size       = $fileObject->getClientSize();
                       $path       = $fileObject->storeAs('images', time().'.'.$extension);

                      $product ->image1 = $path;
                  }

                  if ( $request ->hasFile('image2') ) {

                       $fileObject = $request->file('image2');
                       $extension  = $fileObject->getClientOriginalExtension();
                       $mimeType   = $fileObject->getClientMimeType ();
                       $fileName   = $fileObject->getClientOriginalName();
                       $size       = $fileObject->getClientSize();
                       $path       = $fileObject->storeAs('images', time().'.'.$extension);

                      $product ->image2 = $path;
                  }

                  if ( $request ->hasFile('image3') ) {

                       $fileObject = $request->file('image3');
                       $extension  = $fileObject->getClientOriginalExtension();
                       $mimeType   = $fileObject->getClientMimeType ();
                       $fileName   = $fileObject->getClientOriginalName();
                       $size       = $fileObject->getClientSize();
                       $path       = $fileObject->storeAs('images', time().'.'.$extension);

                      $product ->image3 = $path;
                  }


                  if ( $request ->hasFile('image4') ) {

                       $fileObject = $request->file('image4');
                       $extension  = $fileObject->getClientOriginalExtension();
                       $mimeType   = $fileObject->getClientMimeType ();
                       $fileName   = $fileObject->getClientOriginalName();
                       $size       = $fileObject->getClientSize();
                       $path       = $fileObject->storeAs('images', time().'.'.$extension);

                      $product ->image4 = $path;
                  }


                  if ( $request ->hasFile('image5') ) {

                       $fileObject = $request->file('image5');
                       $extension  = $fileObject->getClientOriginalExtension();
                       $mimeType   = $fileObject->getClientMimeType ();
                       $fileName   = $fileObject->getClientOriginalName();
                       $size       = $fileObject->getClientSize();
                       $path       = $fileObject->storeAs('images', time().'.'.$extension);

                      $product ->image5 = $path;
                  }




                   $product ->save();
                   return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pro = Product::find($id);
       return view('products.show')->with('pro', $pro);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pro = Product::find($id);
      return view('products.edit')->with('pro', $pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

                      $this->validate($request, [

                     'name_ar' => 'required',
                     'name_en' => 'required',
                     'price' => 'required',
                     'offer_price' => 'required',
                     'quantity' => 'required',
                     'brand_id' => 'required',
                     'cat_id' => 'required',
                     'offer_id' => 'required',
                     // 'selling_quantity' => 'required',
                     'infromation_ar' => 'required',
                     'infromation_en' => 'required',
                     'detail_ar' => 'required',
                     'detail_en' => 'required',
                     // 'time' => 'required',
                     'image1' => 'required',

                      ]);

                        $product = Product::find($id);

                        $product ->name_ar          = $request->input('name_ar');
                        $product ->name_en          = $request->input('name_en');
                        $product ->price            = $request->input('price');
                        $product ->offer_price      = $request->input('offer_price');
                        $product ->quantity         = $request->input('quantity');
                        $product ->category_id      = $request->input('cat_id');
                        $product ->brand_id         = $request->input('brand_id');
                        $product ->offer_id         = $request->input('offer_id');
                        // $product ->selling_quantity = $request->input('selling_quantity');
                        $product ->infromation_ar   = $request->input('infromation_ar');
                        $product ->infromation_en   = $request->input('infromation_en');
                        $product ->detail_ar        = $request->input('detail_ar');
                        $product ->detail_en        = $request->input('detail_en');
                        $product ->user_id          = $request->input('user_id');
                        // $product ->time             = $request->input('time');


                        if ( $request ->hasFile('image1') ) {

                             $fileObject = $request->file('image1');
                             $extension  = $fileObject->getClientOriginalExtension();
                             $mimeType   = $fileObject->getClientMimeType ();
                             $fileName   = $fileObject->getClientOriginalName();
                             $size       = $fileObject->getClientSize();
                             $path       = $fileObject->storeAs('images', time().'.'.$extension);

                            $product ->image1 = $path;
                        }

                        if ( $request ->hasFile('image2') ) {

                             $fileObject = $request->file('image2');
                             $extension  = $fileObject->getClientOriginalExtension();
                             $mimeType   = $fileObject->getClientMimeType ();
                             $fileName   = $fileObject->getClientOriginalName();
                             $size       = $fileObject->getClientSize();
                             $path       = $fileObject->storeAs('images', time().'.'.$extension);

                            $product ->image2 = $path;
                        }

                        if ( $request ->hasFile('image3') ) {

                             $fileObject = $request->file('image3');
                             $extension  = $fileObject->getClientOriginalExtension();
                             $mimeType   = $fileObject->getClientMimeType ();
                             $fileName   = $fileObject->getClientOriginalName();
                             $size       = $fileObject->getClientSize();
                             $path       = $fileObject->storeAs('images', time().'.'.$extension);

                            $product ->image3 = $path;
                        }


                        if ( $request ->hasFile('image4') ) {

                             $fileObject = $request->file('image4');
                             $extension  = $fileObject->getClientOriginalExtension();
                             $mimeType   = $fileObject->getClientMimeType ();
                             $fileName   = $fileObject->getClientOriginalName();
                             $size       = $fileObject->getClientSize();
                             $path       = $fileObject->storeAs('images', time().'.'.$extension);

                            $product ->image4 = $path;
                        }


                        if ( $request ->hasFile('image5') ) {

                             $fileObject = $request->file('image5');
                             $extension  = $fileObject->getClientOriginalExtension();
                             $mimeType   = $fileObject->getClientMimeType ();
                             $fileName   = $fileObject->getClientOriginalName();
                             $size       = $fileObject->getClientSize();
                             $path       = $fileObject->storeAs('images', time().'.'.$extension);

                            $product ->image5 = $path;
                        }



                         $product ->save();
                         return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pro = Product::find($id);
      $pro -> destroy($id);
      return redirect(route('product.index'));
    }
}
