

</div>



    <!---------------- FOOTER --------------->
    <div class="footer1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <h3 class="text-left">Sign up for special offers and style news:</h3>
                    <form class="FOOTERFORM" role="search">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Your Email Address" name="">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">sign up</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <h3 class="text-left">JOIN IN:</h3>
                    <div class="social">
                        <a href="" class="facebook"> <i class="fab fa-facebook-f"></i></a>
                        <a href="" class="instagram"> <i class="fab fa-instagram"></i></a>
                        <a href="" class="twitter"> <i class="fab fa-twitter"></i></a>
                        <a href="" class="youtube"> <i class="fab fa-youtube"></i></a>
                        <a href="" class="pinterest"> <i class="fab fa-pinterest-p"></i></a>
                        <a href="" class="google"> <i class="fab fa-google"></i></a>
                        <a href="" class="snapchat"> <i class="fab fa-snapchat-ghost"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------- FOOTER --------------->
    <div class="footer text-left">
        <div class="contain">
            <div class="col">
                <h1>Help</h1>
                <ul>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">How to Order</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">About Payment</a></li>
                </ul>
            </div>
            <div class="col">
                <h1>Policy</h1>
                <ul>
                    <li><a href="">Return Policy</a></li>
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col">
                <h1>About Us</h1>
                <ul>
                    <li><a href="">Intellectual Property Statement</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h1>Cooperate With Us</h1>
                <ul>
                    <li><a href="">Why sell on smart mall?</a></li>
                    <li><a href="">smart mall Affiliate</a></li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li><i class="fas fa-mobile-alt fa-4x"></i><br>
                        <p>1,897.97 E£ off for new users</p>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="footer-bottom row">
        <p>
            ©2019, All Rights Reserved.
        </p>
    </div>




<script type="text/html" src="js/jquery.min.js"></script>
<script type="text/html" src="js/bootstrap.min.js"></script>
<script type="text/html" src="js/panelmenu.js"></script>
<script type="text/html" src="js/slick.min.js"></script>
<script type="text/html" src="js/lazyload.min.js"></script>
<script type="text/html" src="js/main.js"></script>
<!-- form validation and sending to mail -->
<script type="text/html" src="js/jquery.form.js"></script>
<script type="text/html" src="js/jquery.validate.min.js"></script>
<script type="text/html" src="js/jquery.form-init.js"></script>
</body>
</html>







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

    <!-- navbar --
    <script>
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
-->
    <!-- dropdown -->



    <script>

    $('.fav').on('click', function(e) {
      $(this).toggleClass("WishList");
    });
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
        menuState = {
            menuOpen: false,
            timer: false
        }

        $('#hover1, #show1').on('mouseover', () => {
            clearInterval(menuState.timer)
            if (menuState.menuOpen) {
                return
            }
            $('#show1').show();
            menuState.menuOpen = true
        })

        $('#hover1, #show1').on('mouseout', () => {
            menuState.timer = setTimeout(() => {
                menuState.menuOpen = false
                $('#show1').hide()
            }, 100)
        })
    </script>


    <script>
        menuState = {
            menuOpen: false,
            timer: false
        }

        $('#hover2, #show2').on('mouseover', () => {
            clearInterval(menuState.timer)
            if (menuState.menuOpen) {
                return
            }
            $('#show2').show();
            menuState.menuOpen = true
        })

        $('#hover2, #show2').on('mouseout', () => {
            menuState.timer = setTimeout(() => {
                menuState.menuOpen = false
                $('#show2').hide()
            }, 100)
        })
    </script>

    <script type="text/javascript">

    			$(document).ready(function(){


            $("#search").on({
              keyup: function(){

                $('.search_pro').show();

                   var q = $(this).val();


                   $.get("ajax/search.php",{q : q}).done(function(e)
                      {
                          $(".search_pro").html(e);

                  });


              },

              // mouseleave: function(){
              //   $('.search_pro').hide();
              // }



    			   	// $("#search").keyup(function(){
              //
              //   $('.search_pro').show();
              //
              //      var q = $(this).val();
              //
              //
              //      $.get("ajax/search.php",{q : q}).done(function(e)
     			    //         {
     			    //             $(".search_pro").html(e);
              //
     			    //     });
              //


    			 	});	// end of event




    			}); // end of ready

    </script>


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap-arabic.min.js"></script>
    <script src="js/animation_slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>





</body>

</html>
