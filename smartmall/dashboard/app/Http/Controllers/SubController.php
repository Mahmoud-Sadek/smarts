<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Category model
use App\model\Category;

class SubController extends Controller
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
        $cats = Category::where('parent_id','!=', 0)->get();
        return view('subcats.sub')->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcats.add');
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
         // 'time' => 'required',
         'image' => 'required',

          ]);

            $cat = new Category();

            $cat ->title_ar  = $request->input('name_ar');
            $cat ->title_en  = $request->input('name_en');
            $cat ->parent_id = $request->input('parent_id');
            $cat ->son_id    = $request->input('son_id');
            $cat ->time      = $request->input('time');

            if ( $request ->hasFile('image') ) {

                 $fileObject = $request->file('image');
                 $extension  = $fileObject->getClientOriginalExtension();
                 $mimeType   = $fileObject->getClientMimeType ();
                 $fileName   = $fileObject->getClientOriginalName();
                 $size       = $fileObject->getClientSize();
                 $path       = $fileObject->storeAs('images', time().'.'.$extension);

                $cat ->image = $path;
            }

             $cat ->save();
             return redirect(route('subcategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cats = Category::find($id);
      return view('subcats.show')->with('cats', $cats);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $cat = Category::find($id);
      return view('subcats.edit')->with('catss', $cat);
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
         // 'time' => 'required',
         'image' => 'required',

          ]);

            $cat = Category::find($id);

            $cat ->title_ar  = $request->input('name_ar');
            $cat ->title_en  = $request->input('name_en');
            $cat ->parent_id  = $request->input('parent_id');
            $cat ->son_id    = $request->input('son_id');
            $cat ->time      = $request->input('time');

            if ( $request ->hasFile('image') ) {

                 $fileObject = $request->file('image');
                 $extension  = $fileObject->getClientOriginalExtension();
                 $mimeType   = $fileObject->getClientMimeType ();
                 $fileName   = $fileObject->getClientOriginalName();
                 $size       = $fileObject->getClientSize();
                 $path       = $fileObject->storeAs('images', time().'.'.$extension);

                $cat ->image = $path;
            }

             $cat ->save();
             return redirect(route('subcategory.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cat = Category::find($id);
      $cat -> destroy($id);
      return back();
    }
}
