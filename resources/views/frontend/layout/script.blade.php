
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"

integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





<script>

    const currentLocation = location.href;
    const menuTItem = document.querySelectorAll('ul li a');
    const menuLength = menuTItem.length
    for (let i=0;i<menuLength;i++){
    if(menuTItem[i].href === currentLocation){

    menuTItem[i].className = " nav-link active"

    }
    }

 </script>


<script>
    document.getElementById("sbtn").style.display = "none";

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>











{{-- FAQ SECTION SCRIPT  START--}}

<script>
    /*<p>Pagination part? borrowed from <a href='/JoshBlackwood/'>Joshua Blackwood</a>'s Pen <a href='/JoshBlackwood/pen/yoLBJ/'>yoLBJ</a>.</p>*/

    var accordWithPage = function () {

        var faqDiv = $('#faq-links div');


        $(function () {

            faqDiv.on("click", function () {

                var hideSec = 'faq-hide';
                var $this = $(this),
                    $id = $this.attr('id'),
                    $class = '.' + $('.about-' + $id).attr('class').replace(hideSec, '');

                $('#faq-wrapper').addClass(hideSec);
                $('.about-' + $id).removeClass(hideSec);
                $('div[class*=about]').not($class).addClass(hideSec);

            });

        });

        $(function () {

            var select = 'faq-selected';

            faqDiv.click(function () {

                if ($(this).hasClass(select)) {
                    $(this).removeClass(select);
                } else {
                    $('#faq-links .faq-selected').removeClass(select);
                    $(this).addClass(select);
                }
            }); //faq link selected
        });




        //Accordion

        $(function () {

            var expand = 'expanded';
            var content = $('.faq-content');
            //FAQ Accordion
            $('.faq-accordion > li > a').click(function (e) {
                e.preventDefault();
                if ($(this).hasClass(expand)) {
                    $(this).removeClass(expand);
                    //          $('.faq-accordion > li > a > div').not(this).css('opacity', '1');//returns li back to normal state
                    $(this).parent().children('ul').stop(true, true).slideUp();
                } else {
                    //            $('.faq-accordion > li > a > div').not(this).css('opacity', '0.5');//dims inactive li
                    $('.faq-accordion > li > a.expanded').removeClass(expand);
                    $(this).addClass(expand);
                    content.filter(":visible").slideUp();
                    $(this).parent().children('ul').stop(true, true).slideDown();
                }
            }); //accordion function

            content.hide();

        });

    }

    accordWithPage();

    /*$(function () {
       $("#faq-links div").click(function () {
        $('.slide-left').fadeOut( "slow", "linear" );
         $('.slide-left').fadeIn( "slow", "linear" );
        }); //faq link fade in and out
      }); //document ready*/
</script>


{{-- FAQ SECTION SCRIPT  END--}}


<script>
    AOS.init();
  </script>
  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
  </script>
  <!-- Script for slider hover image -->
  <!-- Script for slider hover image end-->
  <!-- Subscription button feature -->
  <script>
    $(function () {
      "use strict";
      var body = $("body"),
        // var slideCont = document.querySelector(".fa fa-circle-o"),
        // active = $(".slider ol li .auto-btn, .slider .controll"),
        active = $(".slider-main ol li ,  .slider-main .controll"),
        controll = $(".slider-main .controll"),
        playpause = $(".playpause"),
        sliderTime = 1,
        sliderWait = 5000,
        i = 999,
        autoRun,
        stop = false;
      // Reset
      $(".slider-main ul li:first").css("left", 0);
      // Run Slider
      function runSlider(what) {
        what.addClass("active").siblings("li, span").removeClass("active");
      }
      // slider gsap
      function gsapSlider(whose, left) {
        i++;
        if (whose.hasClass("active")) {
          TweenMax.fromTo(".slider-main ul li.active", sliderTime, {
            zIndex: i,
            left: left
          }, {
            left: 0
          });
        }
      }
      // Active
      active.on("mouseover", function () {
        runSlider($(this));
      });
      // Arrow left
      controll.first().on("click", function () {
        var slide = $(".slider-main ul li.active, .slider-main ol li.active, ").is(":first-of-type") ? $(".slider-main ul li:last, .slider-main ol li :last") : $(".slider-main ul li.active, .slider-main ol li.active").prev("li");
        runSlider(slide);
        gsapSlider(slide, "100%");
      });
      // Arrow right
      controll.last().on("click", function () {
        var slide = $(".slider-main ul li.active, .slider-main ol li.active").is(":last-of-type") ? $(".slider-main ul li:first, .slider-main ol li :first") : $(".slider-main ul li.active, .slider-main ol li .active").next("li");
        runSlider(slide);
        gsapSlider(slide, "-100%");
      });
      // Point
      $(".slider-main ol li ").on("mouseover", function () {
        var start = $(".slider-main ul li.active").index();
        var slide = $(".slider-main ul li").eq($(this).index());
        runSlider(slide);
        var end = $(".slider-main ul li.active").index();
        if (start > end) {
          gsapSlider(slide, "100%");
        }
        if (start < end) {
          gsapSlider(slide, "-100%");
        }
      });
      // Auto run slider
      function autoRunSlider() {
        if (body.css("direction") === "ltr" && stop === false) {
          autoRun = setInterval(function () {
            controll.last().click();
          }, sliderWait);
        } else if (body.css("direction") === "rtl" && stop === false) {
          autoRun = setInterval(function () {
            controll.first().click();
          }, sliderWait);
        }
      }
      autoRunSlider();
      // When hover
      active.on("mouseover", function () {
        if (stop === false) {
          clearInterval(autoRun);
        }
      });
      active.on("mouseout", function () {
        if (stop === false) {
          autoRunSlider();
        }
      });
      // play pause click
    });
  </script>
  <script>
    $(function () {
      "use strict1";
      var body = $("body"),
        active = $(".slider-main ol li , .slider-main .top-controll"),
        controll = $(".slider-main .top-controll"),
        playpause = $(".playpause"),
        sliderTime = 1,
        sliderWait = 5000,
        i = 0,
        autoRun,
        stop = false;
      // Reset
      $(".slider-popup-top ul li:first").css("left", 0);
      // Run Slider
      function runSlider(what) {
        what.addClass("active").siblings("li, span").removeClass("active");
      }
      // slider gsap
      function gsapSlider(whose, left) {
        i++;
        if (whose.hasClass("active")) {
          TweenMax.fromTo(".slider-popup-top ul li.active", sliderTime, {
            zIndex: i,
            left: left
          }, {
            left: 0
          });
        }
      }
      // Active
      active.on("mouseover", function () {
        runSlider($(this));
      });
      // Arrow left
      controll.first().on("click", function () {
        var slide = $(".slider-popup-top ul li.active, .slider-main ol li.active").is(":first-of-type") ? $(".slider-popup-top ul li:last, .slider-main  ol li:last") : $(".slider-popup-top ul li.active, .slider-main  ol li.active").prev("li");
        runSlider(slide);
        gsapSlider(slide, "100%");
      });
      // Arrow right
      controll.last().on("click", function () {
        var slide = $(".slider-popup-top ul li.active, .slider-main  ol li.active").is(":last-of-type") ? $(".slider-popup-top ul li:first, .slider-main  ol li:first") : $(".slider-popup-top ul li.active, .slider-main  ol li.active").next("li");
        runSlider(slide);
        gsapSlider(slide, "-100%");
      });
      // Point
      $(".slider-main ol li").on("mouseover", function () {
        var start = $(".slider-popup-top ul li.active").index();
        var slide = $(".slider-popup-top ul li").eq($(this).index());
        runSlider(slide);
        var end = $(".slider-popup-top ul li.active").index();
        if (start > end) {
          gsapSlider(slide, "100%");
        }
        if (start < end) {
          gsapSlider(slide, "-100%");
        }
      });
      // Auto run slider
      function autoRunSlider1() {
        if (body.css("direction") === "ltr" && stop === false) {
          autoRun = setInterval(function () {
            controll.last().click();
          }, sliderWait);
        } else if (body.css("direction") === "rtl" && stop === false) {
          autoRun = setInterval(function () {
            controll.first().click();
          }, sliderWait);
        }
      }
      autoRunSlider1();
      // When hover
      active.on("mouseenter", function () {
        if (stop === false) {
          clearInterval(autoRun);
        }
      });
      active.on("mouseleave", function () {
        if (stop === false) {
          autoRunSlider1();
        }
      });
    });
  </script>
  <script>
    $(function () {
      "use strict2";
      var body = $("body"),
        active = $(".slider-main ol li, .slider-main .bottom-controll"),
        controll = $(".slider-main .bottom-controll"),
        playpause = $(".playpause"),
        sliderTime = 1,
        sliderWait = 5000,
        i = 0,
        autoRun,
        stop = false;
      // Reset
      $(".slider-popup-bottom ul li:first").css("left", 0);
      // Run Slider
      function runSlider(what) {
        what.addClass("active").siblings("li, span").removeClass("active");
      }
      // slider gsap
      function gsapSlider(whose, left) {
        i++;
        if (whose.hasClass("active")) {
          TweenMax.fromTo(".slider-popup-bottom ul li.active", sliderTime, {
            zIndex: i,
            left: left
          }, {
            left: 0
          });
        }
      }
      // Active
      active.on("mouseover", function () {
        runSlider($(this));
      });
      // Arrow left
      controll.first().on("click", function () {
        var slide = $(".slider-popup-bottom ul li.active, .slider-p ol li.active").is(":first-of-type") ? $(".slider-popup-bottom ul li:last, .slider-p ol li:last") : $(".slider-popup-bottom ul li.active, .slider-p ol li.active").prev("li");
        runSlider(slide);
        gsapSlider(slide, "100%");
      });
      // Arrow right
      controll.last().on("click", function () {
        var slide = $(".slider-popup-bottom ul li.active, .slider-p ol li.active").is(":last-of-type") ? $(".slider-popup-bottom ul li:first, .slider-p ol li:first") : $(".slider-popup-bottom ul li.active, .slider-p ol li.active").next("li");
        runSlider(slide);
        gsapSlider(slide, "-100%");
      });
      // Point
      $(".slider-main ol li").on("mouseover", function () {
        var start = $(".slider-popup-bottom ul li.active").index();
        var slide = $(".slider-popup-bottom ul li").eq($(this).index());
        runSlider(slide);
        var end = $(".slider-popup-bottom ul li.active").index();
        if (start > end) {
          gsapSlider(slide, "100%");
        }
        if (start < end) {
          gsapSlider(slide, "-100%");
        }
      });
      // Auto run slider
      function autoRunSlider1() {
        if (body.css("direction") === "ltr" && stop === false) {
          autoRun = setInterval(function () {
            controll.last().click();
          }, sliderWait);
        } else if (body.css("direction") === "rtl" && stop === false) {
          autoRun = setInterval(function () {
            controll.first().click();
          }, sliderWait);
        }
      }
      autoRunSlider1();
      // When hover
      active.on("mouseover", function () {
        if (stop === false) {
          clearInterval(autoRun);
        }
      });
      active.on("mouseout", function () {
        if (stop === false) {
          autoRunSlider1();
        }
      });
    });
  </script>


