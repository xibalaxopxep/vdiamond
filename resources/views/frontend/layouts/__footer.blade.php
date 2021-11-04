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
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        });


      $(document).ready(function () {
               $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,

                fade: true,
                asNavFor: '.slider-nav'
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

                 $('.btn-number').click(function(e){
      $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    });
          });
</script>

  
</body>


</html>