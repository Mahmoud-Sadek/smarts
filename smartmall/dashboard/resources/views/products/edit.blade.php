@include('in-in-layout.header')


  <?php


  use App\model\Category;
  use App\model\Brand;
  use App\model\Offer;
  use App\User;

  $cats       = Category::where('parent_id','=', 0)->get();
  $categories = Category::where('parent_id','!=', 0)->get();
  $users      = User::where('isadmin','>=', 6)->get();
  $brands = Brand::all();
  $offers = Offer::all();


  ?>


  <div class="content-inner">
      <div class="container-fluid">
          <div class="row flex-row">
              <div class="col-12">
                  <div class="row d-flex align-items-center mb-5">

                      <div class="col-lg-12">

      <!-- start form ************************* -->
            <form   action="{{ route('product.update', $pro->id ) }}" method="POST" enctype="multipart/form-data" class="form-group">
                     <input type="hidden" name="_method" value="PUT">
                     {{csrf_field()}}

                              @if($errors ->any() )
                                     <div class="bs-example text-center">

                                     @foreach( $errors->all() as $error )

                                           <div class="alert alert-danger ">

                                                <strong>Warning! </strong> {{ $error }}.

                                           </div>

                                     @endforeach
                              </div>


                              @endif


                              <input name="image1" style="display: inline-block" id="Idimage" type='file' onchange="readURL(this);" />

                              <input name="image2" style="display: inline-block" id="Idimage" type='file' onchange="readURL(this);" />

                              <input name="image3" style="display: inline-block" id="Idimage" type='file' onchange="readURL(this);" />


                              <input name="image4" style="display: inline-block" id="Idimage" type='file' onchange="readURL(this);" />


                              <input  name="image5" style="display: inline-block" id="Idimage" type='file' onchange="readURL(this);" />




                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <input value="{{ $pro->name_ar }}" name="name_ar" type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>الاسم بالعربي</label>
                              </div>
                          </div>


                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <input value="{{ $pro->name_en }}" name="name_en" type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>الاسم بالانجليزي</label>
                              </div>
                          </div>



                          <div class="form-group row mb-5">
                              <label class="col-lg-3 form-control-label">اسم القسم الاساسي</label>
                              <div class="col-lg-9 select mb-3">
                                  <select name="cat_id" class="custom-select form-control">

                                      <option disabled value="0">Category</option>
                                      <option value="0">None</option>

                                      @foreach($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title_en }}</option>
                                      @endforeach

                                  </select>
                              </div>
                          </div>


                          <div class="form-group row mb-5">
                              <label class="col-lg-3 form-control-label">اسم القسم الفرعى </label>
                              <div class="col-lg-9 select mb-3">
                                  <select name="son_id" class="custom-select form-control">


                                        <option disabled value="0">SubCategory</option>
                                        <option value="0">None</option>

                                        @foreach($categories as $cat)
                                          <option value="{{ $cat->id }}">{{ $cat->title_en }}</option>
                                        @endforeach

                                  </select>
                              </div>
                          </div>


                          <div class="form-group row mb-5">
                              <label class="col-lg-3 form-control-label">اسم ا</label>
                              <div class="col-lg-9 select mb-3">
                                  <select name="brand_id" class="custom-select form-control">

                                    <option disabled value="0">Brands</option>

                                      <option value="0">None</option>

                                      @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->title_en }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>



                          <div class="form-group row mb-5">
                              <label class="col-lg-3 form-control-label">اسم القسم الاساسي بالانجليزي</label>
                              <div class="col-lg-9 select mb-3">
                                  <select name="offer_id" class="custom-select form-control">

                                    <option disabled value="0">Offers</option>
                                    <option value="0">None</option>

                                    @foreach($offers as $offer)
                                      <option value="{{ $offer->id }}">{{ $offer->title_en }}</option>
                                    @endforeach

                                  </select>
                              </div>
                          </div>


                          <div class="form-group row mb-5">
                              <label class="col-lg-3 form-control-label">اسم المورد</label>
                              <div class="col-lg-9 select mb-3">
                                  <select name="user_id" class="custom-select form-control">
                             @foreach($users as $users)
                                      <option value="{{ $users->id }}">{{ $users->name }}</option>
                            @endforeach

                                  </select>
                              </div>
                          </div>








                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <input value="{{ $pro->price }}" name="price" type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>السعر الاصلي</label>
                              </div>
                          </div>



                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <input value="{{ $pro->offer_price }}" name="offer_price" type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>نسبة الخصم</label>
                              </div>
                          </div>



                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <input value="{{ $pro->quantity }}" name="quantity" type="text" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>الكمية</label>
                              </div>
                          </div>



                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <textarea  name="detail_ar" class="form-control"  rows="8" cols="80" required>{{ $pro->detail_ar }}</textarea>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>الوصف بالعربي</label>
                              </div>
                          </div>


                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <textarea name="detail_en" class="form-control"  rows="8" cols="80" required>{{ $pro->detail_en }}</textarea>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>الوصف بالانجليزي</label>
                              </div>
                          </div>


                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <textarea name="infromation_ar" class="form-control" name="name" rows="8" cols="80" required>{{ $pro->infromation_ar }}</textarea>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>المعلومات بالعربي</label>
                              </div>
                          </div>


                          <div class="mt-5 mb-5 position-relative">
                              <div class="group material-input">
                                  <textarea name="infromation_en" class="form-control" name="name" rows="8" cols="80" required>{{ $pro->infromation_en }}</textarea>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>المعلومات بالانجليزي</label>
                              </div>
                          </div> <br>

                          <button type="submit" class="add text-center">حفظ التعديلات</button>

                 </form>

                      </div>
                  </div>

              </div>
          </div>
          <!-- End Row -->
      </div>
      <!-- End Container -->

      <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

  </div>






@include('in-in-layout.footer')
