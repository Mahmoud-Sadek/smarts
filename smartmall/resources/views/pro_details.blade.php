<title>@yield('title', 'SmartMall')</title>
@include('layout/header')





<!--

    <nav id="sticky_nav">
        <div class="container_left">
            <li> <a class="home" href="" target="blank_">
                    <h4>SMART MALL</h4>
                </a>
            </li>

            <li class="lang">

                <a href="#" style="border-right: 1px solid #eee" class="dropdown-toggle" data-toggle="dropdown" id="hover1"><img src="img/currency-egp.jpg"> EGP &nbsp; </a>



                <ul class="dropdown-menu" role="menu" id="show1">
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




            <button id="btnMenu" onclick="openMenu()">
                <i class="fa fa-bars"></i>
                <i class="fa fa-close"></i>
            </button>



            <li>

                <a href="#" id="hover2">
                    <i class="fas fa-bars"></i>
                </a>



                <ul class="dropdown-menu" role="menu" id="show2">
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Mum & Kids</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Mum & Kids</a></li>
                </ul>

            </li>

        </div>
        <div class="container_right">
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
            <li class="shop1">
                <a href="#">
                    <span>20</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            <li style="padding-left: 25px;"><a href="log.html" style="border-right: 1px solid #eee"> Log in &nbsp; </a></li>
            <li><a href="log.html">Register</a></li>
        </div>
    </nav>
-->
    <!------------- title ----------------->

    <!------------- content ----------------->
    <div class="row details">
        <div class="col-md-4 col-xs-12">

                <div id="myCarousel" class="carousel slide">

                    <div class="carousel-inner">

                        <div class="item active mag">
                            <img data-toggle="magnify" src="dashboard/storage/app/{{ $pro->image1 }} " id="zoom_05" data-zoom-image="dashboard/storage/app/{{ $pro->image1 }} ">

                        </div>

                        <div class="item mag">
                            <img src="dashboard/storage/app/{{ $pro->image2 }} " data-toggle="magnify" id="zoom_05" data-zoom-image="dashboard/storage/app/{{ $pro->image2 }} ">


                        </div>

                        <div class="item mag">
                            <img data-toggle="magnify" src="dashboard/storage/app/{{ $pro->image3 }} " id="zoom_05" data-zoom-image="dashboard/storage/app/{{ $pro->image3 }} ">

                        </div>

                        <div class="item mag">
                            <img src="dashboard/storage/app/{{ $pro->image4 }} " data-toggle="magnify" id="zoom_05" data-zoom-image="dashboard/storage/app/{{ $pro->image4 }} ">


                        </div>


                    </div>


                    <ul class="nav nav-pills nav-justified">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">
                                <img style="width: 50px" src="dashboard/storage/app/{{ $pro->image1 }} "></a></li>
                        <li data-target="#myCarousel" data-slide-to="1"><a href="#">
                                <img style="width: 50px" src="dashboard/storage/app/{{ $pro->image2 }} "></a></li>
                        <li data-target="#myCarousel" data-slide-to="2"><a href="#">
                                <img style="width: 50px" src="dashboard/storage/app/{{ $pro->image3 }} "></a></li>
                        <li data-target="#myCarousel" data-slide-to="3"><a href="#">
                                <img style="width: 50px" src="dashboard/storage/app/{{ $pro->image4 }} "></a></li>
                    </ul>


                </div>

        </div>

        <div class="col-md-6 col-xs-12">
            <h3 class="text-left">{{ $pro->name_en }}</h3>

            <p class="code text-left">#1VT792C1424S</p>
            <div class="detail1 text-left">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <span class="offer"> {{ $pro->price }} Egp</span>
                    </div>

                    <div class="col-md-4 col-xs-12" style="float: right">
                        <span>3 reviews</span>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <i class="fas fa-not-equal"></i> <span> Non-returnable Item</span>
                    </div>
                </div>
            </div>
            <div class="row details2">

                    <h4 class="text-left">Color</h4>
                    <br><br>
                    <div class="col-md-2">
                        <img style="width: 68.5px; height: 81px;" src="dashboard/storage/app/{{ $pro->image1 }}">

                    </div>
                    <div class="col-md-2">
                        <img style="width: 68.5px; height: 81px;" src="dashboard/storage/app/{{ $pro->image2 }}">
                    </div>
                    <div class="col-md-2">
                         <img style="width: 68.5px; height: 81px;" src="dashboard/storage/app/{{ $pro->image3 }}">

                    </div>
                    <div class="col-md-2">
                         <img style="width: 68.5px; height: 81px;" src="dashboard/storage/app/{{ $pro->image4 }}">
                    </div>
            </div>

            <div class="ADDiT" style="margin-top:50px">

              <div  style="width: 100%" id="msg_cart">



              </div>
               @guest


               <input value="{{ $pro->id }}" type="hidden" name="product_id">

               <div class="col-sm-3">


                    <div class="action">
                        <div class="cat-number">

                             <input name="quantity" type="number" value="1" class="form-control text-center" placeholder="quantity">

                        </div><!--End cat-number-->
                    </div>
               </div>

               <div class="col-sm-3" >
                 <a data-toggle="modal" data-target="#Loginformat"  class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                        ADD TO Carts</a>
                 </div>

                @else
                             <input   value="{{ Auth::user()->id }}"  type="text" id="user_id_q" hidden>

                             <input   value="{{ $pro->price }}"  type="text" id="price" hidden>


                              <input value="{{ $pro->id }}" id="product_id_q" type="hidden" name="product_id">

                              <div class="col-sm-3">
                                <input name="quantity"  type="number" id="quantity" value="1" class="form-control text-center" placeholder="quantity">
                              </div>

                              <div class="col-sm-3">
                                  <button id="cart_btn" type="submit" class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                 ADD TO Carts</button>
                              </div>


              <!-- <form method="POST" action="{{ route('carts.store') }}" >

                                      {{csrf_field()}}


                              <input   value="{{ Auth::user()->id }}"  type="text" id="user_id_q" hidden>

                             <input   value="{{ $pro->price }}"  type="text" name="price" hidden>


                               <input value="{{ $pro->id }}" id="product_id_q" type="hidden" name="product_id">

                               <div class="col-sm-3">
                                 <input name="quantity"  type="number" id="quantity" value="1" class="form-control text-center" placeholder="quantity">
                               </div>

                               <div class="col-sm-3">
                                   <button id="cart_btn" type="submit" class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                  ADD TO Carts</button>
                               </div>

             </form> -->



                  @endguest
            </div>

        </div>

        <div class="col-md-2 imgs">
            <h4>How About These ?</h4>

            <div class="row nogutters">


@foreach($pros as $pros)

<a href='{{ url("/pro_details{$pros->id}") }}'>

                <div class="col-md-6 col-xs-12">
                    <img style="width:90px; height:100px" src="dashboard/storage/app/{{ $pros->image1 }}">
                    <span class="offer">{{ $pros->price }} SAR</span>
                </div>
  </a>

@endforeach


            </div>

        </div>
    </div>




   <script>
        $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
    </script>

    <!--------------------------------------->
    <div class="container">
        <div class="row details details1">
            <div class="col-md-12 text-left">
                <div class="border row" id="det"><br>
                    <div class="col-md-6">

                         <h4>Details</h4>
                         <p>
                            {{ $pro->detail_en }}
                         </p>
                    </div>

                    <div class="col-md-6">

                         <h4>Information</h4>

<p>
{{ $pro->infromation_en }}
</p>
                    </div>

                </div>
                <br>
                <div class="rev" id="rev"><br>
                    <h4>Customer Review</h4><br>
                    <div class="cust11 row">
                        <div class="col-md-2">
                          @foreach($pro->reviews as $reviews)
                            <h4>{{ $reviews->rating }}</h4><br>
                          @endforeach
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <span> Average Rating</span>
                        </div>
                        <div class="col-md-6">
                            <span>3 <i class="fas fa-star"></i></span>
                            <div class="progress">
                                <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <span>1</span>
                            <br>
                            <span>1 <i class="fas fa-star"></i></span>
                            <div class="progress">
                                <div data-percentage="0%" style="width: 0%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <span>0</span><br>
                            <span>3 <i class="fas fa-star"></i></span>
                            <div class="progress">
                                <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <span>1</span>
                        </div>
                        <div class="col-md-4">
                            <b> We want to hear from you!</b>
                            <p>You can leave your review after login and purchase.</p><br>
                              @guest

                              <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#Loginformat">Write a review</button>

                                @else
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target=".bs-example-modal-sm">Write a review</button>
                             @endguest

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Add review..</h4>
              </div>
                <div class="modal-body">
                                <form method="POST" action="{{ route('review.store') }}" class="text-center">
                                <fieldset class="rating" name="rating">
                                    {{csrf_field()}}
                                   <input value="{{ $pro->id }}" type="hidden" name="product_id">

                                    <input type="radio" id="star5" name="rating" value=".5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                    <input type="radio" id="star4half" name="rating" value="1" />
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                    <input type="radio" id="star4" name="rating" value="1.5" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                    <input type="radio" id="star3half" name="rating" value="2" />
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                    <input type="radio" id="star3" name="rating" value="2.5" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                                    <input type="radio" id="star2half" name="rating" value="3" />
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                    <input type="radio" id="star2" name="rating" value="3.5" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                    <input type="radio" id="star1half" name="rating" value="4" />
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                    <input type="radio" id="star1" name="rating" value="4.5" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                    <input type="radio" id="starhalf" name="rating" value="5" />
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>



                                </fieldset>
                                <input value="{{ $pro->id }}" type="hidden" name="product_id">
                                <textarea class="form-control" name="text_en" rows="4" cols="20" style="margin-bottom:10px"  required></textarea>
                                <input class="btn btn-danger" type="submit" name="" value="Add review" />

                                </form>
                </div>
            </div>
          </div>
        </div>

                        </div>

                    </div>
                    <div class="cust12 row">
@foreach($reviewss as $reviews)
                        <div class=" row">
                          <h4>By : {{ $reviews->user->name }}</h4>
                            <div class="col-md-3">


                                <p>{{ $reviews->text_en }}</p>

                            </div>
                            <div class="col-md-8">
                                <i class="fas fa-star"></i>{{ $reviews->rating }} <br>

                            </div>

                        </div>

                        <hr style="width: 95%">
  @endforeach

                    </div>

                </div>
            </div>
        </div>
</div>
        <!------------- scripts ----------------->
    <!-- navbar -->
    <script>





/* Product Number Counter
====================================*/

$(document).ready(function () {

    'use strict';

    $('.number-up').click(function () {
        var $value = ($(this).closest('.cat-number').find('input[type="text"]').attr('value'));
        $(this).closest('.cat-number').find('input[type="text"]').attr('value', parseFloat($value) + 1);
        return false;
    });

    $('.number-down').click(function () {
        var $value = ($(this).closest('.cat-number').find('input[type="text"]').attr('value'));
        if ($value > 1) {
            $(this).closest('.cat-number').find('input[type="text"]').attr('value', parseFloat($value) - 1);
        }
        return false;
    });

});



        window.onscroll = function() {
            scrollFunction()
        }

        function scrollFunction() {
            var sn = document.getElementById("sticky_nav");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                sn.style.top = "0"
            } else {
                sn.style.top = "-65px"
            }
        }

        function openList(x) {
            var cL = document.getElementsByClassName("content_list");
            var i;
            for (i = 0; i < cL.length; i++) {
                var OcL = cL[i];
                if (cL[i] != document.getElementById("thisList_" + x)) {
                    OcL.classList.remove("show_list")
                }
            }
            document.getElementById("thisList_" + x).classList.toggle("show_list")
        }

        function openSearch() {
            document.getElementById("thisSearch").classList.toggle("show_search");
            document.getElementById("btnSearch").getElementsByTagName("i")[0].classList.toggle("hidden");
            document.getElementById("btnSearch").getElementsByTagName("i")[1].classList.toggle("visible")
        }

        function openMenu() {
            document.getElementById("thisMenu").classList.toggle("show_menu");
            document.getElementById("btnMenu").getElementsByTagName("i")[0].classList.toggle("hidden");
            document.getElementById("btnMenu").getElementsByTagName("i")[1].classList.toggle("visible")
        }


        $('.mobile-toggle').click(function() {
            $('body').addClass("opened");
        });

        $('.overlay').click(function() {
            $('body').removeClass("opened");
        });
    </script>

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

    <!---- slider ---->


    <script type="text/javascript">
        $(document).ready(function() {
            $(".mCustomScrollbar").mCustomScrollbar({
                axis: "x"
            });
        });
    </script>
    <!---- magnify ---->

    <script>
        ! function($) {

            "use strict";

            var Magnify = function(element, options) {
                this.init('magnify', element, options)
            }

            Magnify.prototype = {

                constructor: Magnify

                    ,
                init: function(type, element, options) {
                        var event = 'mousemove',
                            eventOut = 'mouseleave';

                        this.type = type
                        this.$element = $(element)
                        this.options = this.getOptions(options)
                        this.nativeWidth = 0
                        this.nativeHeight = 0

                        this.$element.wrap('<div class="magnify" \>');
                        this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                        this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") + "') no-repeat");

                        this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                        this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                    }

                    ,
                getOptions: function(options) {
                        options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                        if (options.delay && typeof options.delay == 'number') {
                            options.delay = {
                                show: options.delay,
                                hide: options.delay
                            }
                        }

                        return options
                    }

                    ,
                check: function(e) {
                    var container = $(e.currentTarget);
                    var self = container.children('img');
                    var mag = container.children(".magnify-large");

                    // Get the native dimensions of the image
                    if (!this.nativeWidth && !this.nativeHeight) {
                        var image = new Image();
                        image.src = self.attr("src");

                        this.nativeWidth = image.width;
                        this.nativeHeight = image.height;

                    } else {

                        var magnifyOffset = container.offset();
                        var mx = e.pageX - magnifyOffset.left;
                        var my = e.pageY - magnifyOffset.top;

                        if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                            mag.fadeIn(100);
                        } else {
                            mag.fadeOut(100);
                        }

                        if (mag.is(":visible")) {
                            var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                            var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
                            var bgp = rx + "px " + ry + "px";

                            var px = mx - mag.width() / 2;
                            var py = my - mag.height() / 2;

                            mag.css({
                                left: px,
                                top: py,
                                backgroundPosition: bgp
                            });
                        }
                    }

                }
            }


            $.fn.magnify = function(option) {
                return this.each(function() {
                    var $this = $(this),
                        data = $this.data('magnify'),
                        options = typeof option == 'object' && option
                    if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                    if (typeof option == 'string') data[option]()
                })
            }

            $.fn.magnify.Constructor = Magnify

            $.fn.magnify.defaults = {
                delay: 0
            }


            $(window).on('load', function() {
                $('[data-toggle="magnify"]').each(function() {
                    var $mag = $(this);
                    $mag.magnify()
                })
            })

        }(window.jQuery);
    </script>


@include('layout/footer')



<script type="text/javascript">

			$(document).ready(function(){


			   	$("#cart_btn").click(function(){

               var quantity    = $("#quantity").val();
               var price       = $("#price").val();
			 		     var user_id     = $("#user_id_q").val();
			         var product_id  = $("#product_id_q").val();


			        $.post("ajax/cart.php",{q:quantity, b:user_id, c:product_id, p:price}).done(function(e)
			            {
			                $("#msg_cart").html(e);

			        });

			 	});	// end of event




			}); // end of ready

</script>
