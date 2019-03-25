<!DOCtype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

    <link href="../../css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">


    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="../../js/jquery-1.12.3.min.js"></script>
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

      $cats     = Category::where('parent_id', 0)->get();
      $products = Product::paginate(5);
      $offers   = Offer::paginate(5);


  ?>




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
                    <li style="border-right: 1px solid #eee"><a href="log.html">Log in </a></li>
                    <li><a href="log.html">Register</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#"> Sell On Smart Mall </a></li>
                </ul>
            </div>
        </div>


        <div class="navbar second">
            <div class="logonav">
                <a href="#" class="navbar-brand">
                    <img class="logo" src="img/LOGO%20PNG01.png">
                </a>
                <a href="#" class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="links">

                    <ul class="nav nav-right">

                        <li>
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for goods" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="shop">
                            <a href="#">
                                <span>20</span>
                                <i class="fas fa-shopping-cart fa-2x"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


    <div class="navbar secondary third">
        <div class="links-secondary">

            <ul class="nav">
@foreach($cats as $cat)   

                <li class="dropdown mega-dropdown li_dib">

         

             <a href='{{ url("/subcategory/{$cat->id}") }}'>{{ $cat->title_en }} </a>



                    <ul class="dropdown-menu mega-dropdown-menu row">


                        <li class="col-sm-2">
                            <ul>
                         @foreach($cat->products as $pro)        
                                <li class="dropdown-header">{{ $pro->name_en }}</li>
                         @endforeach
                            </ul>
                        </li>



                     </ul>

                </li>
@endforeach

            </ul>

        </div>
    </div>



</header>
