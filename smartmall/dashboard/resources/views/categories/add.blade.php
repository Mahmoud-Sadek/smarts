<title>@yield('title', 'Add Category')</title>
@include('in-layout/header')



<?php

use App\model\Category;

$cats       = Category::where('parent_id','=', 0)->get();

$categories = Category::where('parent_id','!=', 0)->get();


?>



<div class="content-inner">
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="col-12">
                <div class="row d-flex align-items-center mb-5">

                    <div class="col-lg-12">

          <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" class="form-group">

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

                    <input name="parent_id" value="0" type="text" required hidden>

                    <input name="son_id" value="0" type="text" required hidden>
                    <label for="file-upload" class="custom-file-upload">
                        <i class="la la-lg la-cloud-upload"></i> &nbsp;
                        تحميل صورة
                    </label>
                    <input name="imagee" id="file-upload" type="file" />
                    <br>
                    <br>

                        <input name="image" id="file-upload" type="file" />
                        <br><br>
                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input name="name_ar" type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>الاسم بالعربي</label>
                            </div>
                        </div>
                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input name="name_en" type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>الاسم بالانجليزي</label>
                            </div>
                        </div>

  
                   <button type="submit" class="add text-center">إضافة</button>


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
</div>
<!-- End Page Content -->
</div>






@include('in-layout.footer')
