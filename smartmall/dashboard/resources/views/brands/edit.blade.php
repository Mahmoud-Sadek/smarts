<title>@yield('title', 'Edit Brands')</title>
@include('in-in-layout/header')



<div class="content-inner">
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="col-12">
                <div class="row d-flex align-items-center mb-5">

                    <div class="col-lg-12">
    <!-- start form ************************* -->
          <form action="{{ route('brand.update', $brand->id ) }}" method="POST" enctype="multipart/form-data" class="form-group">
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

                        <label for="file-upload" class="custom-file-upload">
                            <i class="la la-lg la-cloud-upload"></i> &nbsp;
                            تحميل صورة
                        </label>
                        <input name="image" id="file-upload" type="file" />
                        <br>
                        <br>
                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input value="{{ $brand->title_ar }}" name="title_ar" type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>الاسم بالعربي</label>
                            </div>
                        </div>
                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input value="{{ $brand->title_en }}" name="title_en" type="text" required>
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

@include('in-in-layout.footer')
