
@include('in-layout/header')

<?php

use App\model\Category;

$cats = Category::all();


?>

        <div class="page-content d-flex align-items-stretch">
            <div class="default-sidebar">
                <!-- Begin Side Navbar -->
                <nav class="side-navbar box-scroll sidebar-scroll">
                    <ul class="list-unstyled">
                        <li><a href="main.html" aria-expanded="false"><i class="la la-home"></i><span>الرئيسية</span></a>

                        </li>
                        <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-columns"></i><span>الأقسام</span></a>
                            <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                                <li><a href="view-sub.html">فرعي</a></li>
                                <li><a href="view-category.html">رئيسي</a></li>

                            </ul>
                        </li>
                        <li><a href="view-product.html"><i class="la la-table"></i><span>المنتجات</span></a></li>
                        <li><a href="view-offer.html"><i class="la la-usd"></i><span>العروض</span></a></li>
                        <li><a href="view-vendor.html"><i class="la la-black-tie"></i><span>الموردين</span></a></li>
                        <li><a href="buy.html"><i class="la la-usd"></i><span>المشتريات</span></a></li>
                        <li><a href="order.html"><i class="la la-bell"></i><span>الطلبات</span></a></li>
                    </ul>
                </nav>
                <!-- End Side Navbar -->
            </div>
            <!-- End Left Sidebar -->



            <div class="content-inner">
                <div class="container-fluid">
                    <div class="row flex-row">
                        <div class="col-12">
                            <div class="row d-flex align-items-center mb-5">

                                <div class="col-lg-12">

        <!-- start form ************************* -->
          <form action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data" class="form-group">

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
                                    <input  name="image" id="file-upload" type="file" />
                                    <br><br>


                                    <div class="mt-5 mb-5 position-relative">
                                        <div class="group material-input">
                                            <input name="title_ar" type="text" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>الاسم بالعربي</label>
                                        </div>
                                    </div>


                                    <div class="mt-5 mb-5 position-relative" required>
                                        <div class="group material-input">
                                            <input name="title_en" type="text" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>الاسم بالانجليزي</label>
                                        </div>
                                    </div>

                                    <div class="mt-5 mb-5 position-relative">
                                        <div class="group material-input">
                                            <input name="description_ar" type="text" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>الوصف بالعربي</label>
                                        </div>
                                    </div>


                                    <div class="mt-5 mb-5 position-relative">
                                        <div class="group material-input">
                                            <input name="description_en" type="text" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>الوصف بالانجليزي</label>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-5">
                                        <label class="col-lg-3 form-control-label">اسم القسم الاساسي بالعربي</label>
                                        <div class="col-lg-9 select mb-3">
                                            <select name="cat_id" class="custom-select form-control" required>

                                              @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title_en }}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-5">
                                        <label class="col-lg-3 form-control-label">وضع العرض</label>
                                        <div class="col-lg-9 select mb-3">

                                            <select name="flash_option" class="custom-select form-control" required>

                                                <option value="0">ordinary</option>
                                                <option value="1">In Slider</option>
                                                <option value="2">flash sale</option>

                                            </select>

                                        </div>
                                    </div>


                               <button class="add  text-center">إضافة</button>



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

@include('in-layout/footer')
