<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Offer;
class OfferController extends Controller
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
        $offer = Offer::all();
        return view('offers.offer')->with('offer', $offer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.add');
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


           'image' => 'required',

            ]);

      $offer = new Offer();

      $offer ->title_ar        = $request->input('title_ar');
      $offer ->title_en        = $request->input('title_en');
      $offer ->description_ar  = $request->input('description_ar');
      $offer ->description_en  = $request->input('description_en');
      $offer ->category_id     = $request->input('cat_id');
      $offer ->flash_option    = $request->input('flash_option');
      // $offer ->time            = $request->input('time');

      if ( $request ->hasFile('image') ) {

           $fileObject = $request->file('image');
           $extension  = $fileObject->getClientOriginalExtension();
           $mimeType   = $fileObject->getClientMimeType ();
           $fileName   = $fileObject->getClientOriginalName();
           $size       = $fileObject->getClientSize();
           $path       = $fileObject->storeAs('images', time().'.'.$extension);

          $offer ->image = $path;
      }

       $offer ->save();
       return redirect(route('offer.index'));
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
      $offer = Offer::find($id);
      return view('offers.edit')->with('offer', $offer);
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


     'image' => 'required',

      ]);


      $offer = Offer::find($id);

      $offer ->title_ar        = $request->input('title_ar');
      $offer ->title_en        = $request->input('title_en');
      $offer ->description_ar  = $request->input('description_ar');
      $offer ->description_en  = $request->input('description_en');
      $offer ->category_id     = $request->input('cat_id');
      $offer ->flash_option    = $request->input('flash_option');
      // $offer ->time            = $request->input('time');


      if ( $request ->hasFile('image') ) {

           $fileObject = $request->file('image');
           $extension  = $fileObject->getClientOriginalExtension();
           $mimeType   = $fileObject->getClientMimeType ();
           $fileName   = $fileObject->getClientOriginalName();
           $size       = $fileObject->getClientSize();
           $path       = $fileObject->storeAs('images', time().'.'.$extension);

          $offer ->image = $path;
      }

       $offer ->save();
       return redirect(route('offer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $offer = Offer::find($id);
      $offer -> destroy($id);
      return redirect(route('offer.index'));
    }
}
