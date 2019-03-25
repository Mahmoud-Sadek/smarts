<!DOCtype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">


    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>


    <link rel="stylesheet" href="css/index.css">

</head>

<body>




  <?php

      use App\model\Category;
      use App\model\Product;
      use App\model\Offer;
      use App\model\Cart;
      use App\User;

      $cats     = Category::where('parent_id', 0)->get();
      $products = Product::paginate(5);
      $offers   = Offer::paginate(5);

      if( Auth::user()){
        $user     = User::find( Auth::user()->id );

        $carts    = Cart::where('user_id', Auth::user()->id )->count();
      }




  ?>




<header>


        <div class="navbar secondary first">
            <div class="container-fluid links-secondary">
                <ul class="nav show-on-hover">

                    <li class="lang">

                        <a href="#" style="border-right: 1px solid #eee" class="dropdown-toggle" data-toggle="dropdown" id="hover">
                          <i class="fas fa-globe-africa"></i> &nbsp;
                          English
                        </a>
                        <ul class="dropdown-menu" role="menu" id="show">
                          <li><a href="#"><i class="fas fa-globe-africa"></i> &nbsp;Arabic</a></li>
                        </ul>

                    </li>

                    <li><a href="#">Help</a></li>
                    <li><a href="#"> Sell On Smart Mall </a></li>
                </ul>
                <ul class="nav nav-right">
                    @guest

                    <li data-toggle="modal" data-target="#Loginformat" style="border-right: 1px solid #eee; cursor:pointer"> Login <span style="padding-left:30px"> </span> </li>
                    <li data-toggle="modal" data-target="#RegisterFormat" style="cursor:pointer">Register</li>

                    @else

                                <li><a href="{{ url('/') }}"><i class="fas fa-user nav_icon"></i> {{ Auth::user()->name }}</a></li>
                                <li>

                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }} <i class="fas fa-sign-out-alt nav_icon"></i>
                                            </a>



                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                              </li>

                    @endguest



                </ul>
            </div>
        </div>


        <div class="navbar second">
            <div class="logonav">
                <a href='{{ url("/") }}' class="navbar-brand">
                    <img class="logo" src="img/mat.png">
                </a>
                <a href="#" class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="links">


        <ul class="nav nav-right">


              <li class="NAV-Search">
                <input class="form-control" id="search" type="search" name="search" autocomplete="off">
                <i class="fas fa-search"></i>

                <div class="search_pro">



                </div>
              </li>






                        @guest

                        @else
                            <li class="shop">

                                <a href='{{ url("/carts{$user->id}") }}'>
                                    <span>{{ $carts }}</span>
                                    <i class="fas fa-shopping-cart fa-2x"></i>
                                </a>
                            </li>

                        @endguest


                    </ul>
                </div>
            </div>
        </div>


    <div class="navbar secondary third">
        <div class="links-secondary container">

            <ul class="nav">
@foreach($cats as $cat)

                <li class="dropdown mega-dropdown li_dib">


             <a class="dbb" class="dropdown-toggle" data-toggle="dropdown">{{ $cat->title_en }} </a>


                    <ul class="dropdown-menu mega-dropdown-menu">

<div  class="container ">

  <div class="row">
                            <li class="col-sm-3">
                                <ul>
                                    <h5 style="color: black; ">{{ $cat->title_en }} </h5>
                             @foreach($cat->parent as $cats)
                                    <li class="dropdown-header"><a href='{{ url("/product{$cats->id}") }}'>- {{ $cats->title_en }}</a></li>
                             @endforeach
                                </ul>
                            </li>



    </div>
</div>




                     </ul>

                </li>
@endforeach

            </ul>

        </div>
    </div>



</header>






<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Loginformat">
  Login
</button>
 -->


<!-- Modal -->
<div class="modal fade" id="Loginformat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ route('login') }}" id="login-form">
          @csrf
          <div class="heading">LOGIN</div>
          <div class="right">

              <label for="email"></label> <br />


              <input id="loginInputEmail" type="email" name="email" value="{{ old('email') }}" placeholder="Email Or Mobile Number" required autofocus> <br />
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif



              <label for="password"></label> <br />
              <input type="password" name="password" id="pass" placeholder="Password" required> <br />
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif

              <a href="" class="text-left">Forget Password ?</a>
              <input type="submit" value="Login" />
              <a href="">Log in via SMS</a>
          </div>
          <div class="left">
              Newcomers? <span id="flip-card-btn-turn-to-back">Register now!
              </span>
              <div class="connect">Or Log In with </div>
              <a href="" class="facebook">
                 <i class="fab fa-facebook-square"></i> Log in with Facebook
              </a> <br />
              <a href="" class="google-plus">
                  <i class="fab fa-google"></i> Log in with Google
              </a>

              <p>
                  Social Login keeps you from creating another account.</p>
          </div>
      </form>

    </div>
  </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#RegisterFormat">
  register
</button>
 -->

<!-- Modal -->
<div class="modal fade" id="RegisterFormat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">


      <form method="POST" action="{{ route('register') }}" id="login-form2">
          @csrf
          <div class="heading">Resister</div>
          <div class="right">

              <label for="text"></label> <br />
              <input placeholder="Name" id="name1" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

              <label for="email"></label> <br />

              <input placeholder="E-mail" id="email" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif



              <label for="password"></label> <br />
              <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif


              <label for="password"></label> <br />
              <input placeholder="Comfirm Password" placeholder="Last Name" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


              <a href="" class="text-left">Have an account ?</a>

              <button type="submit" class="btn btn-block login-form2">
                  {{ __('Sign Up') }}
              </button>
              <a href="">Register via SMS</a>
          </div>
          <div class="left">
              Newcomers? <span id="flip-card-btn-turn-to-back">Login now!
              </span>
              <div class="connect">Or Register with </div>
              <a href="" class="facebook">
                 <i class="fab fa-facebook-square"></i> Log in with Facebook
              </a> <br />
              <a href="" class="google-plus">
                  <i class="fab fa-google"></i> Log in with Google
              </a>

              <p>
                  Social Login keeps you from creating another account.</p>
          </div>
      </form>
    </div>
  </div>
</div>








<!-- // -->
