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

<body class="log">

    <div class="row log1">
        <!------------- Navbar ------------------->
        <header>


        <div class="navbar secondary first">
            <div class="container-fluid links-secondary">
                <ul class="nav show-on-hover">

                    <li class="lang">

                        <a href="#" style="border-right: 1px solid #eee" class="dropdown-toggle" data-toggle="dropdown" id="hover"><img src="img/currency-egp.jpg"> EGP</a>



                        <ul class="dropdown-menu" role="menu" id="show">
                            <li class="ship"><a href="#">ship to</a>
                                <ul>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>
                                    <li><a href="#"><img src="img/currency-egp.jpg"> Egypt</a></li>

                                </ul>
                            </li>

                            <li class="divider"></li>
                            <li style="color: #000">other sites</li>
                            <li><a href="#">English</a></li>
                            <li><a href="#">Arabic</a></li>


                        </ul>

                    </li>
                    <li><a href="#"></a>&nbsp; Free shipping on orders over 17,573.80 E£ to Egyp</li>

                </ul>
                <ul class="nav nav-right">
                    <li style="border-right: 1px solid #eee"><a href="#">Log in </a></li>
                    <li><a href="#Register">Register</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#"> Sell On Smart Mall </a></li>
                </ul>
            </div>
        </div>

        </header>




        <div class="flip-card-3D-wrapper">
            <div id="flip-card">
                <div class="flip-card-front">







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







                <div class="flip-card-back">

                    <form action="#" id="login-form">
                        <div class="heading">REGISTER</div>
                        <div class="right">
                            <label for="email"></label> <br />
                            <input type="email" name="email" id="email" placeholder="Email Or Mobile Number"> <br />
                            <label for="password"></label> <br />
                            <input type="password" name="password" id="pass" placeholder="Password"> <br />
                            <a href="" class="text-left">Forget Password ?</a>
                            <input type="submit" value="Login" />
                            <a href="">Log in via SMS</a>
                        </div>
                        <div class="left">
                            <span id="flip-card-btn-turn-to-front">Already member? </span>

                            <div class="connect">Or Log In with </div>
                            <a href="" class="facebook">
                               <i class="fab fa-facebook-square"></i> Log in with Facebook
                            </a> <br />
                            <a href="" class="google-plus">
                                <i class="fab fa-google"></i> Log in with Google
                            </a>

                            <p>
                                Social Login keeps you from creating another account.
                            </p>
                        </div>
                    </form>

                </div>






            </div>
        </div>
        <!------------- login  ----------------->

        <div class="row">
        </div>



        <!------------- scroll to top ----------------->

        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <img src="img/download%20(2).png">
            </span>
        </div>

    </div>
    <script>
        $(document).ready(function() {

            $(function() {

                $(document).on('scroll', function() {

                    if ($(window).scrollTop() > 100) {
                        $('.scroll-top-wrapper').addClass('show');
                    } else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                });

                $('.scroll-top-wrapper').on('click', scrollToTop);
            });

            function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 500, 'linear');
            }

        });
    </script>
    </div>
    <!------------- scripts ----------------->


    <!-- dropdown -->
    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

            // breakpoint and up
            $(window).resize(function() {
                if ($(window).width() >= 980) {

                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function() {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    // hide the menu when the mouse leaves the dropdown
                    $(".navbar .dropdown-menu").mouseleave(function() {
                        $(this).removeClass("show");
                    });

                    // do something here
                }
            });



            // document ready
        });

    </script>
  <script>
        menuState = {
            menuOpen: false,
            timer: false
        }

        $('#hover, #show').on('mouseover', () => {
            clearInterval(menuState.timer)
            if (menuState.menuOpen) {
                return
            }
            $('#show').show();
            menuState.menuOpen = true
        })

        $('#hover, #show').on('mouseout', () => {
            menuState.timer = setTimeout(() => {
                menuState.menuOpen = false
                $('#show').hide()
            }, 100)
        })
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function(event) {

            document.getElementById('flip-card-btn-turn-to-back').style.visibility = 'visible';
            document.getElementById('flip-card-btn-turn-to-front').style.visibility = 'visible';

            document.getElementById('flip-card-btn-turn-to-back').onclick = function() {
                document.getElementById('flip-card').classList.toggle('do-flip');
            };

            document.getElementById('flip-card-btn-turn-to-front').onclick = function() {
                document.getElementById('flip-card').classList.toggle('do-flip');
            };

        });

    </script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap-arabic.min.js"></script>

</body>

</html>
