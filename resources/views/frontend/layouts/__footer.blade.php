  <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
<!--  -->
    </footer>
    <!-- Footer Area End -->
 <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/frontend/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets/frontend/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{!!asset('assets/frontend/js/plugins/infiniteslidev2.js')!!}"></script>
    <script src="{!!asset('assets/frontend/js/vendor/jquery.magnific-popup.min.js')!!}"></script>
    
    <!-- Main Js -->
    <script src="{!!asset('assets/frontend/js/vendor/index.js')!!}"></script>
    <script src="{!!asset('assets/frontend/js/main.js')!!}"></script>
    
   <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
   <!-- //jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
         $('#luxury-carousel').owlCarousel({
          nav: true,
          loop : true,
          navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1.9
            }
          }
        });

        $("#news-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            autoplay: true,
            navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
            animateOut: 'fadeOut',
            autoplayTimeout: 3000,
            nav: true
        });


        $("#top-carousel").owlCarousel({
            items: 1,
            loop: true,
            navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
            nav: true
        });

        $("#best-seller-carousel").owlCarousel({
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            items: 1,
            loop: true,
            navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
            nav: true
        });


      
     
     

        $('#feedback-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1.5  
                },
                600:{
                    items:3
                },
                1000:{
                    items: 5  
                }
            }
          });

          $('#related-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1.5  
                },
                600:{
                    items:3
                },
                1000:{
                    items: 4     
                }
            }
          });
        });




      $(document).ready(function () {
               $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,

                fade: true,
                asNavFor: '.slider-nav',
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      dots: true
                    }
                  }
                 ]
              });
              $('.slider-nav').slick({
                margin: 5,
                slidesToShow: 3,
                slidesToScroll: 2,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true

              });

     
          });
</script>

  
</body>


</html>