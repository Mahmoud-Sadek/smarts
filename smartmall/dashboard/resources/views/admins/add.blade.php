@include('in-layout/header')



<div class="content-inner">
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="col-12">
                <div class="row d-flex align-items-center mb-5">

                    <div class="col-lg-12">

  <form method="POST" action="{{ route('admin.store') }}" >

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


                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input name="name" type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>الاسم</label>
                            </div>
                        </div>


                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input name="admin_email" type="email" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>البريد الالكتروني</label>
                            </div>
                        </div>


                        <div class="form-group row mb-5">
                            <label class="col-lg-3 form-control-label">اضافه مستخدم</label>
                            <div class="col-lg-9 select mb-3">
                                <select name="user_availabe" class="custom-select form-control" required>

                                    <option value="4">مسؤل</option>
                                    <option value="5">مدير</option>
                                    <option value="6">مورد</option>


                                </select>
                            </div>
                        </div>





                        <div class="mt-5 mb-5 position-relative">
                            <div class="group material-input">
                                <input name="password" type="password" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>كلمة المرور</label>
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







@include('in-layout.footer')
