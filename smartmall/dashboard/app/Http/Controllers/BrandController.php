<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Brand;

use Auth;

class BrandController extends Controller
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
      $brands = Brand::all();
      return view('brands.brand')->with('brands', $brands);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.add');
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

     'title_ar' => 'required',
     'title_en' => 'required',
     'image' => 'required',

      ]);

        $brand = new Brand();

        $brand ->title_ar  = $request->input('title_ar');
        $brand ->title_en  = $request->input('title_en');
        $brand ->image     = $request->input('image');
        $brand ->publisher  = Auth::user()->name;
        // $brand ->time      = $request->input('time');

        if ( $request ->hasFile('image') ) {

             $fileObject = $request->file('image');
             $extension  = $fileObject->getClientOriginalExtension();
             $mimeType   = $fileObject->getClientMimeType ();
             $fileName   = $fileObject->getClientOriginalName();
             $size       = $fileObject->getClientSize();
             $path       = $fileObject->storeAs('images', time().'.'.$extension);

            $brand ->image = $path;
        }

         $brand ->save();
         return redirect(route('brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $brand = Brand::find($id);
      return view('brands.edit')->with('brand', $brand);
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

       'title_ar' => 'required',
       'title_en' => 'required',
       'image' => 'required',

        ]);

          $brand = Brand::find($id);

          $brand ->title_ar  = $request->input('title_ar');
          $brand ->title_en  = $request->input('title_en');
          $brand ->image     = $request->input('image');
          // $brand ->time      = $request->input('time');

          if ( $request ->hasFile('image') ) {

               $fileObject = $request->file('image');
               $extension  = $fileObject->getClientOriginalExtension();
               $mimeType   = $fileObject->getClientMimeType ();
               $fileName   = $fileObject->getClientOriginalName();
               $size       = $fileObject->getClientSize();
               $path       = $fileObject->storeAs('images', time().'.'.$extension);

              $brand ->image = $path;
          }

           $brand ->save();
           return redirect( route('brand.index') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand = Brand::find($id);
      $brand -> destroy($id);
      return redirect(route('brand.index'));
    }
}
