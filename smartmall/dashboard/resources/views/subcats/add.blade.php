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

          <form method="POST" action="{{ route('subcategory.store') }}"  enctype="multipart/form-data" class="form-group">

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

                        <label for="file-upload" class="custom-file-upload">
                            <i class="la la-lg la-cloud-upload"></i> &nbsp;
                            تحميل صورة
                        </label>
                        <input name="image" id="file-upload" type="file" />
                        <br>
                        <br>
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
                        <div class="form-group row mb-5">
                          <label class="col-lg-3 form-control-label">اسم القسم الاساسي </label>
                            <div class="col-lg-9 select mb-3">
                                <select name="parent_id" class="custom-select form-control">
                                   @foreach($cats as $cat)
                                     <option value="{{ $cat->id }}">{{ $cat->title_ar }}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label class="col-lg-3 form-control-label">اسم القسم الفرعى</label>
                            <div class="col-lg-9 select mb-3">
                                <select name="son_id" class="custom-select form-control">
                                  <option value="0">لا يوجد</option>
                                   @foreach($categories as $cat)
                                     <option value="{{ $cat->id }}">{{ $cat->title_ar }}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>


                        <button class="add text-center">إضافة</button>

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
