<title>@yield('title', 'SmartMall')</title>
@include('layout/header')



        <!----->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Title</title>

<!--link rel="icon" type="image.png" href="icons.jpg"-->

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

<style type="text/css">

/* ==========================================================================
        Slider core styles
===========================================================================*/
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.slider-container {
  position: relative;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  background-color: #444;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.slider {
  position: relative;
  width: 9999px;
}
.slider:before,
.slider:after {
  display: table;
  content: ' ';
}
.slider:after {
  clear: both;
}
.slider__item {
  position: relative;
  float: left;
  margin: 0;
  padding: 0;
}
.slider__item img {
  display: block;
  max-width: 100%;
  height: 300px;
}
.slider__switch span {
  color: #fff;
  display: block;
  width: 32px;
  height: 32px;
}
/* Arrows */
.slider__switch {
  position: absolute;
  top: 50%;
  margin-top: -20px;
  padding: 10px 5px;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
       -o-user-select: none;
          user-select: none;
  border-radius: 1px;
  background: #000;
  opacity: .3;
  transition: opacity .15s ease;
  fill: #fff;
}
.slider__switch--prev {
  left: 10px;
}
.slider__switch--next {
  right: 10px;
}

.slider__switch:hover {
  opacity: .85;
}
.slider__switch[disabled] {
  visibility: hidden;
  opacity: 0;
}
.slider__caption {
  position: absolute;
  bottom: 30px;
  left: 260px;
  display: block;
  max-width: 500px;
  padding: 10px;
  color: #fff;
  background: rgba(0, 0, 0, .8);
  box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.9);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000', endColorstr='#99000000'); /* ie8 */
}
.slider__caption[disabled] {
  opacity: 0;
  visibility: hidden;
}
.slider-nav {
  line-height: 30px;
  position: absolute;
  bottom: 0;
  left: 0;

  width: 100%;
  height: 30px;
  margin: 0;
  padding: 0;
  text-align: center;
  z-index: 99999;
  filter: alpha(opacity=90); /* ie8 */
}
.slider-nav__control {
  display: inline-block;
  width: 12px;
  height: 12px;
  margin: 0 3px;
  -webkit-transition: background .5s ease;
     -moz-transition: background .5s ease;
       -o-transition: background .5s ease;
          transition: background .5s ease;
  border: 2px solid #fff;
  border-radius: 50%;
  background: transparent;
}

.slider-nav__control.is-active {
  width: 12px;
  height: 12px;
  background: #fff;
}
.slider.has-touch {
  cursor: move;
  cursor: -webkit-grabbing;
  cursor:    -moz-grabbing;
}
@media (max-width: 580px) {
  .slider__switch {
    display: none;
  }
  .slider__caption {
    display: none;
  }
}





</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
      <?php

          use App\model\Product;
          use App\model\Category;
          use App\model\Offer;

          $pro  = Product::paginate(4);
          $produts  = Product::all();
          $cats = Category::where('parent_id','!=', 0)->paginate(2);
          $catss = Category::where('parent_id','!=', 0)->paginate(2);
          $offers =  Offer::where('flash_option',1)->orderBy('id', 'DESC')->paginate(4);

          $flashoffers = Offer::where('flash_option',2)->orderBy('id', 'DESC')->paginate(4);

      ?>




<div class="slider-container">


  <div class="slider">

@foreach($offers as $offer)
<a href='{{ url("/pro_offer{$offer->id}") }}'>
    <div class="slider__item">

      <img style="width:100%" src="dashboard/storage/app/{{ $offer->image }}" alt="">

    </div>

</a>

@endforeach



  </div>


  <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
    <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
  </div>

  <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
    <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
  </div>

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

<!-- -------------------------- offer ------------------------->
        <div class="row count" style="padding-top:30px; padding-bottom:30px">
            <div class="row">

                <h1 class="Title_H">Flash Sale 80% OFF</h1>
                <!--
                <h3> End In</h3>
                <br>
                <div id="js-timer" class="timer" >

                    <span class="timer__item hidden" id="timer-days">
                        <span class="timer__value">16</span>
                        <span class="timer__label"></span>
                    </span>

                </div>
              -->
            </div>



            <div class="container">
            	<div class="row">


@foreach($flashoffers as $flashoffers)

                <div class="col-md-3">

                 <a href='{{ url("/pro_offer{$flashoffers->id}") }}'>

                    <div class="pro BG_wihte">
                        <img src="dashboard/storage/app/{{ $flashoffers->image }}">
                        <span class="before"><span>{{ $flashoffers->offer_price }}%</span></span>
                    </div>
	                    <span class="offer"> {{ $flashoffers->offer_price }} SAR </span>
	                    <span class="price"> {{ $flashoffers->price }} SAR</span>

                  </a>

                </div>
@endforeach



            	</div>

            </div>

        </div>



    <!---------------- Category --------------->

@foreach($cats as $cat)



    <div class="category" style="text-transform: capitalize;">


        <h1 class="Title_H" style="color: #777;">{{ $cat->title_en}}</h1>



            <div class="container">
                <div class="row ">


                    @foreach ($cat->productson as $product)

                                  <div class="col-md-3">

                                          <div class="pro proDiv">
                                            <a href='{{ url("/pro_details{$product->id}") }}'>
                                                  <img src="dashboard/storage/app/{{ $product->image1 }}">
                                            </a>
                                            @guest
                                              <a href='{{ url("/carting/{$product->id}") }}'  style="cursor: pointer;" class="fav"><i class="far fa-heart"></i></a>
                                              @else
                                               <span style="cursor: pointer; " class="fav"><i class="far fa-heart"></i></span>
                                            @endguest
                                          </div>
                                      <span class="offer"> {{ $product->price }} SAR </span>
                                      <span class="price"> {{ $product->offer_price }} SAR</span>
                                  </div>

                    @endforeach

                  </div>
                <div class="CTA">
                    <a href='{{ url("/product{$cat->id}") }}' class="btn btn-danger">View All</a>
                </div>
          </div>
    </div>




            <?php

            $option =  $cat->photo_option ;

            if ($option == '') {



            }elseif ($option == '1') { ?>


              <div class="adds add1">
            		<div class="row">
            			<div class="col-md-12">
                    <a href='{{ url("/product{$cat->id}") }}' class="Viewall">

            				<img src="img/22.png" alt="add image">

                  </a>

            			</div>
            		</div>
            	</div>

            <?php } elseif ($option == '2') { ?>


              <div class="adds add2">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="img/21.jpg" alt="add image">
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <img src="img/22.jpg" alt="add image">
                  </div>
                </div>
              </div>

            <?php }elseif ($option == '3') {   ?>


              <div class="adds add3">
                <div class="row">
                  <div class="col-md-4">
                    <a href='{{ url("/product{$cat->id}") }}' class="Viewall">
                      <img src="img/31.jpg" alt="add image">
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href='{{ url("/product{$cat->id}") }}' class="Viewall">
                      <img src="img/32.jpg" alt="add image">
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href='{{ url("/product{$cat->id}") }}' class="Viewall">
                      <img src="img/33.jpg" alt="add image">
                    </a>
                  </div>
                </div>
              </div>

            <?php } elseif ($option == '6') {  ?>


              <div class="adds add6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-7 addleft">
                        <img src="img/21.jpg" alt="add image">
                      </div>
                      <div class="col-md-5 addright">
                        <img src="img/31.jpg" alt="add image">
                        <img src="img/32.jpg" alt="add image">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-7 addleft">
                        <img src="img/22.jpg" alt="add image">
                      </div>
                      <div class="col-md-5 addright">
                        <img src="img/33.jpg" alt="add image">
                        <img src="img/31.jpg" alt="add image">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php }  ?>





@endforeach




<script type="text/javascript">
  (function($) {

  'use strict';

  /**
   * Helpers methods
   */

  function supportCSS3(prop) {
    var prefix = ['-webkit-', '-moz-', ''];
    var root = document.documentElement;

    function camelCase(str) {
      return str.replace(/\-([a-z])/gi, function(match, $1) {
        return $1.toUpperCase();
      });
    }
    for (var i = prefix.length - 1; i >= 0; i--) {
      var css3prop = camelCase(prefix[i] + prop);
      if (css3prop in root.style) {
        return css3prop;
      }
    }
    return false;
  }

  function transitionEnd() {
    var transitions = {
      'transition': 'transitionend',
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'mozTransitionEnd'
    };
    var root = document.documentElement;
    for (var name in transitions) {
      if (root.style[name] !== undefined) {
        return transitions[name];
      }
    }
    return false;
  }

  function support3d() {
    if (!window.getComputedStyle) {
      return false;
    }
    var el = document.createElement('div'),
      has3d,
      transform = supportCSS3('transform');

    document.body.insertBefore(el, null);

    el.style[transform] = 'translate3d(1px,1px,1px)';
    has3d = getComputedStyle(el)[transform];

    document.body.removeChild(el);

    return (has3d !== undefined && has3d.length > 0 && has3d !== "none");
  }

  var Touch = {
    hasTouch: !!(("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch),
    event: function() {
      return {
        start: (this.hasTouch) ? 'touchstart' : 'mousedown',
        move: (this.hasTouch) ? 'touchmove' : 'mousemove',
        end: (this.hasTouch) ? 'touchend' : 'mouseup',
        leave: (this.hasTouch) ? 'touchleave' : 'mouseout'
      };
    }
  };

  function throttle(func, wait, options) {
    var context, args, result;
    var timeout = null;
    var previous = 0;
    if (!options) options = {};
    var later = function() {
      previous = options.leading === false ? 0 : Date.now();
      timeout = null;
      result = func.apply(context, args);
      if (!timeout) context = args = null;
    };
    return function() {
      var now = Date.now();
      if (!previous && options.leading === false) previous = now;
      var remaining = wait - (now - previous);
      context = this;
      args = arguments;
      if (remaining <= 0 || remaining > wait) {
        if (timeout) {
          clearTimeout(timeout);
          timeout = null;
        }
        previous = now;
        result = func.apply(context, args);
        if (!timeout) context = args = null;
      } else if (!timeout && options.trailing !== false) {
        timeout = setTimeout(later, remaining);
      }
      return result;
    };
  }

  var PLUGIN = 'ikSlider';

  var ikSlider = function(el, options) {

    var settings = $.extend({
      touch: true,
      infinite: false,
      autoPlay: true,
      pauseOnHover: true,
      delay: 1500,
      responsive: true,
      controls: true,
      arrows: true,
      caption: true,
      speed: 300,
      cssEase: 'ease-out'
    }, options || {});

    var $container = el;
    var $slider = $container.find('.slider');
    var $arrows = $container.find('.slider__switch');
    var $caption = $slider.find('.slider__caption');
    var $slide = $slider.find('.slider__item');
    var sliderStyle = $slider.get(0).style;
    var slideLen = $slide.length;
    var slideWidth = $container.outerWidth();
    var sliderWidth = slideLen * slideWidth;
    var current = 0;
    var offset = 0;
    var busy = false;
    var touchFlag = false;
    var $controlPanel;
    var $navControl;
    var timer;

    var transformProperty = supportCSS3('transform');
    var transitionProperty = supportCSS3('transition');
    var has3d = support3d();

    function init() {

      // Calculate dimensions
      _dimmensions();

      if (settings.responsive) {
        $(window).on('resize.' + PLUGIN, throttle(_responsive, 50));
      }

      // If caption false, hide caption
      !settings.caption && $caption.attr('disabled', true);

      // Create nav controls
      settings.controls && _controls();

      if (settings.touch) {
        // if the image img tag set attribute graggable false
        $slide.find('img').attr('draggable', false);
        // Binding touch events
        _touchEnable();
      }

      if (settings.autoPlay) {
        _autoPlay();
        if (settings.pauseOnHover) {
          $container.on('mouseenter.' + PLUGIN, function() {
            clearInterval(timer);
          });
          $container.on('mouseleave.' + PLUGIN, _autoPlay);
        }
      }

      if (settings.arrows) {

        // if infinite setting false hide arrows
        !settings.infinite && _stopinfinite('prev');

        $arrows.on('click.' + PLUGIN, function(e) {
          e.preventDefault();
          if (this.getAttribute('data-ikslider-dir') === 'next') {
            show(current + 1);
          } else {
            show(current - 1);
          }
        });
      } else {
        $arrows.attr('disabled', true);
      }
    }

    function _controls() {
      $controlPanel = $('<div/>', {
          'class': 'slider-nav'
        })
        .appendTo($container);

      var links = [];

      for (var i = 0; slideLen > i; i++) {
        var act = (current === i) ? 'is-active' : '';
        links.push('<a class="slider-nav__control ' + act + '" data-ikslider-control="' + i + '"></a>');
      }
      $controlPanel.html(links.join(''));
      $navControl = $controlPanel.find('.slider-nav__control');
      $controlPanel.on('click.' + PLUGIN, '.slider-nav__control', function(e) {
        e.preventDefault();
        if ($(this).hasClass('is-active')) return;
        show(parseInt(this.getAttribute('data-ikslider-control'), 10));
      });
    }

    function _touchEnable() {
      $slider.addClass('has-touch');
      var touchX;
      var touchY;
      var delta;
      var target;

      $slider.on(Touch.event().start + '.' + PLUGIN, function(e) {
        if (touchFlag || busy) return;

        var touch;
        if (e.originalEvent.targetTouches) {
          target = e.originalEvent.targetTouches[0].target;
          touch = e.originalEvent.targetTouches[0];
        } else {
          touch = e.originalEvent;
          e.preventDefault();
        }

        delta = 0;
        touchX = touch.pageX || touch.clientX;
        touchY = touch.pageY || touch.clientY;
        touchFlag = true;

      });
      $slider.on(Touch.event().move + '.' + PLUGIN, function(e) {
        if (!touchFlag) return;

        var touch;
        if (e.originalEvent.targetTouches) {
          if (e.originalEvent.targetTouches.length > 1 || target !== e.originalEvent.targetTouches[0].target) {
            return;
          }
          touch = e.originalEvent.targetTouches[0];
        } else {
          e.preventDefault();
          touch = e.originalEvent;
        }

        var currentX = touch.pageX || touch.clientX;
        var currentY = touch.pageY || touch.clientY;

        if (Math.abs(touchX - currentX) >= Math.abs(touchY - currentY)) {
          delta = touchX - currentX;
          _move(parseInt(offset, 10) - delta);
        }
      });
      $slider.on(Touch.event().end + '.' + PLUGIN, function(e) {
        if (!touchFlag) return;
        var swipeTo = delta < 0 ? current - 1 : current + 1;

        if (Math.abs(delta) < 50 || (!settings.infinite && (swipeTo > slideLen - 1 || swipeTo < 0))) {
          touchFlag = false;
          _move(offset, true);
          return;
        }
        touchFlag = false;
        target = null;
        show(swipeTo);
      });
      $slider.on(Touch.event().leave + '.' + PLUGIN, function() {
        if (touchFlag) {
          _move(offset, true);
          touchFlag = false;
        }
      });
    }

    function show(slide) {
      if (busy) return;
      if (slide === current) return;
      current = (slide > slideLen - 1) ? 0 : slide;
      if (slide < 0) {
        current = slideLen - 1;
      }

      if (!settings.infinite) {

        $arrows.attr('disabled', false);
        if (slide === slideLen - 1) {
          _stopinfinite('next');
        }

        if (current === 0) {
          _stopinfinite('prev');
        }

      }

      offset = -(slideWidth * (current));

      if (settings.controls) {
        $navControl.removeClass('is-active')
          .eq(current)
          .addClass('is-active');
      }
      busy = true;
      _move(offset, true);

      _triggerChange();
    }

    function _move(value, hasAnimate) {

      if (transitionProperty && transformProperty) {

        (hasAnimate) ?
        sliderStyle[transitionProperty] = transformProperty + ' ' + settings.speed + 'ms ' + settings.cssEase: sliderStyle[transitionProperty] = "none";

        (has3d) ?
        sliderStyle[transformProperty] = 'translate3d(' + value + 'px, 0, 0)': sliderStyle[transformProperty] = 'translateX(' + value + 'px)';

        if (hasAnimate) {
          $slider.one(transitionEnd(), function(e) {
            busy = false;
          });
        } else {
          busy = false;
        }
      } else {
        if (hasAnimate) {
          $slider.animate({
            'margin-left': value
          }, settings.speed, 'linear', function() {
            busy = false;
          });
        } else {
          $slider.css('margin-left', value);
          busy = false;
        }

      }
    }

    // Change event trigger
    function _triggerChange() {
      var eventSlide = $.Event('changeSlide.' + PLUGIN, {
        currentSlide: current
      });
      $container.trigger(eventSlide);
    }

    function _autoPlay() {
      if (timer) clearInterval(timer);
      timer = setInterval(function() {
        if (!touchFlag) {
          show(current + 1);
        }
      }, settings.delay);
    }

    function _stopinfinite(direction) {
      $container.find('.slider__switch--' + direction).attr('disabled', true);
    }

    function _dimmensions() {
      slideWidth = $container.outerWidth();
      sliderWidth = slideLen * slideWidth;

      $slide.css('width', slideWidth);
      sliderStyle['width'] = sliderWidth + 'px';
    }

    function _responsive() {

      if (timer) clearInterval(timer);
      _dimmensions();

      offset = -(slideWidth * current);
      _move(offset);

      settings.autoPlay && _autoPlay();

    }

    function destroy() {
      sliderStyle['width'] = '';
      sliderStyle[transformProperty] = '';
      sliderStyle[transitionProperty] = '';
      $slide.css('width', '');
      if (settings.autoPlay) {
        if (timer) clearInterval(timer);
        $container.off('mouseenter.' + PLUGIN);
        $container.off('mouseleave.' + PLUGIN);
      }
      if (settings.arrows) {
        $arrows.off('click.' + PLUGIN);
        $arrows.attr('disabled', false);
      }
      if (settings.controls) {
        $controlPanel.off('click.' + PLUGIN).remove();
      }

      $caption.attr('disabled', false);

      if (settings.touch) {
        $slider
          .removeClass('has-touch')
          .off(Touch.event().start + '.' + PLUGIN)
          .off(Touch.event().move + '.' + PLUGIN)
          .off(Touch.event().end + '.' + PLUGIN)
          .off(Touch.event().leave + '.' + PLUGIN);
        touchFlag = false;
      }
      if (settings.responsive) {
        $(window).off('resize.' + PLUGIN);
      }
      $container.removeData(PLUGIN);
      $container = null;
      $slider = null;
      $arrows = null;
      $caption = null;
      $slide = null;
      $controlPanel = null;
      $navControl = null;
      sliderStyle = null;
      slideLen = null;
      slideWidth = null;
      sliderWidth = null;
      current = null;
      offset = null;
      busy = null;
      timer = null;
      has3d = null;
      busy = false;
      transformProperty = null;
      transitionProperty = null;
    }

    /**
     * @return {methods} [Public slider methods API]
     */
    return {
      init: init,
      show: show,
      destroy: destroy
    };

  };

  $.fn[PLUGIN] = function(opt) {
    var _this = this;
    this.each(function() {
      var $this = $(this);
      var slider = $this.data(PLUGIN);
      var options = typeof opt === 'object' && opt;
      if (!slider && /(destroy|\d+)/.test(opt)) return;
      if (!slider) {
        slider = new ikSlider($this, options);
        $this.data('ikSlider', slider);
        slider.init();
      }
      if (typeof opt === 'string' || typeof opt === 'number' && opt !== 'init') {
        if (typeof opt === 'number') {
          _this = slider.show(opt);
        } else {
          if(slider[opt]) {
            _this = slider[opt]();
          } else {
            throw new Error('Error:: ikSlider has no method: ' + opt);
          }
        }
      }
      return _this;
    });
  };

})(jQuery);


$('.slider-container').ikSlider({
  speed: 500,
  autoPlay: !1
});



</script>

@include('layout/footer')
