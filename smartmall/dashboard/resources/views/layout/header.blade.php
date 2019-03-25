<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>main</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
    <link rel="stylesheet" href="assets/css/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/css/edit.css">
    <link rel="stylesheet" href="assets/css/bootstrap_rtl.css">

</head>

<body id="page-top">
    <!-- start popup modal -->

    <div class=" hidden bg-modal">
        <div class="modal-content">
            <div class="close">
                +
            </div>

            <p class="confirm">هل تريد الحذف؟</p>

            <button class="ok" type="button" class="categorybutton">تاكيد</button>

        </div>
    </div>
    <!-- end popup modal -->

    <div class="page">
        <!-- Begin Header -->
        <header class="header">
            <nav class="navbar fixed-top" style="padding:11px;">
                <!-- Begin Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="ion-close-round"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="ابحث عن شئ..." class="form-control">
                    </form>
                </div>
                <!-- End Search Box-->
                <!-- Begin Topbar -->
                <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                    <!-- Begin Logo -->
                    <div class="navbar-header">
                        <a href="db-default.html" class="navbar-brand">
                          سمارت مول
                        </a>
                        <!-- Toggle Button -->
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <!-- End Toggle -->
                    </div>
                    <!-- End Logo -->
                    <!-- Begin Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                        <!-- Search -->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                        <!-- End Search -->
                    </ul>
                    <!-- End Navbar Menu -->
                </div>
                <!-- End Topbar -->
            </nav>
        </header>



        <!-- End Header -->
        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">
            <div class="default-sidebar">
                <!-- Begin Side Navbar -->
                <nav class="side-navbar box-scroll sidebar-scroll">





                  <ul class="list-unstyled">
                  @if( Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5  || Auth::user()->isadmin == 6   )
                      <li><a href="{{ url('/home') }}" aria-expanded="false"><i class="la la-home"></i><span>الرئيسية</span></a>

                      </li>
                      @endif
                      @if( Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5 )
                      <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-columns"></i><span>الأقسام</span></a>
                          <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                              <li><a href="{{ route('category.index') }}">رئيسي</a></li>
                              <li><a href="{{ route('subcategory.index') }}">فرعي</a></li>
                          </ul>
                      </li>
                    @endif

                    @if( Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5 || Auth::user()->isadmin == 6  )
                      <li><a href="{{ route('product.index') }}"><i class="la la-table"></i><span>المنتجات</span></a></li>
                      @endif
                      @if(Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5  )
                      <li><a href="{{ route('offer.index') }}"><i class="la la-usd"></i><span>العروض</span></a></li>
                      @endif

                      @if( Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5  )
                      <li><a href="{{ route('brand.index') }}"><i class="la la-tree"></i><span>الماركات</span></a></li>
                      @endif
                      @if( Auth::user()->isadmin == 4  )
                      <li><a href="{{ route('admin.index') }}"><i class="la la-black-tie"></i><span>المسؤلين</span></a></li>
                      <li><a href="{{ route('user.index') }}"><i class="la la-black-tie"></i><span>بيانات العملاء</span></a></li>
                     @endif
                     @if(Auth::user()->isadmin == 4 || Auth::user()->isadmin == 5  ||  Auth::user()->isadmin == 6  )
                     <li><a href="{{ route('order.index') }}"><i class="la la-usd"></i><span>طلبات الشراء</span></a></li>
                     @endif

                      <li>



                          @guest
                              <li>
                                  <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else



                                  <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                    <i class="la la-sign-out"></i>  {{ __('تسجيل خروج') }}
                                  </a>



                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf

                                      </form>


                          @endguest
                    </li>



                  </ul>





                </nav>

                <!-- End Side Navbar -->
            </div>
            <!-- End Left Sidebar -->
