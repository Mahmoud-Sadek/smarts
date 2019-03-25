

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/panelmenu.js"></script>
<script src="../../js/slick.min.js"></script>
<script src="../../js/lazyload.min.js"></script>
<script src="../../js/main.js"></script>
<!-- form validation and sending to mail -->
<script src="../../js/jquery.form.js"></script>
<script src="../../js/jquery.validate.min.js"></script>
<script src="../../js/jquery.form-init.js"></script>
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

    <!-- navbar -->
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

    <!-- dropdown -->



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
    <!---- timer --->
    <script>
        (function() {

            'use strict';

            /**
             * Define global Util object if it doesn't exist
             */
            if ('object' !== typeof window.Timer) {
                window.Timer = {};
            }

            /**
             * Namspace string
             */
            Timer.ns = "JavaScript Timer";

            Timer.getTimeRemaining = function(endtimeRaw) {
                // Some browsers need a "T" in there...
                var endtime = new Date(endtimeRaw.replace(/\s/, 'T'));
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));

                // Build out the JSON object
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };

            };

            Timer.updateClock = function(endtime) {

                var t = this.getTimeRemaining(endtime);
                var days = document.getElementById('timer-days');
                var hours = document.getElementById('timer-hours');
                var minutes = document.getElementById('timer-minutes');
                var seconds = document.getElementById('timer-seconds');

                days.querySelector('.timer__value').innerHTML = ('0' + t.days).slice(-2);
                hours.querySelector('.timer__value').innerHTML = ('0' + t.hours).slice(-2);
                minutes.querySelector('.timer__value').innerHTML = ('0' + t.minutes).slice(-2);

                // Adds a leading 0 to maintain spacing
                seconds.querySelector('.timer__value').innerHTML = ('0' + t.seconds).slice(-2);

                // If the timer is at zero
                if (t.total <= 0) {

                    // Stop the timer
                    clearInterval(timeinterval);

                    // Zero out the timer
                    days.querySelector('.timer__value').innerHTML = 0;
                    hours.querySelector('.timer__value').innerHTML = 0;
                    minutes.querySelector('.timer__value').innerHTML = 0;
                    seconds.querySelector('.timer__value').innerHTML = 0;

                } // if 0

            };

            Timer.start = function(obj) {

                var timer = obj.timer;
                var endtime = obj.endtime;

                if (timer) {

                    // Run the function once to avoid a delayed start
                    this.updateClock(endtime);

                    // Set up the time interval to tick the clock down
                    var timeinterval = setInterval(function() {

                        Timer.updateClock(endtime);

                    }, 1000);

                } // timer

            }

        })();

        (function() {

            Timer.start({
                'timer': document.getElementById('js-timer'),
                'endtime': document.getElementById('js-timer').getAttribute('data-endtime')
            });

        })();
    </script>

    <script src="../../http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../../js/bootstrap-arabic.min.js"></script>
    <script src="../../js/animation_slider.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>





</body>

</html>
