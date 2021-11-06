  <!-- Footer Start -->
    <div class="ec-side-cart-overlay" style=""></div>

     <footer class="ec-footer section-space-mt" style="background-image: url('assets/images/background/footer.png'); background-repeat: no-repeat;  background-position: center;
    background-size: cover;">
          <div class="footer-mobile" style="">
            <div style="background: rgba(16, 16, 16, 0.75);">
              <div class="row" style="text-align: left; padding-left: 30px; padding-right: 30px;">
                <div class="col-12 mt-4" style="text-align: center;">
                  <img style="" src="assets/images/favicon/vdiamond.png" alt="">
                </div>
                <div class="col-12 mt-5 mb-3">
                  <h4 class="text-upper mb-3">Liên hệ với chúng tôi</h4>
                  <div class="content mb-3"><img src="{{asset('assets/images/icons/call-white.svg')}}"> Tư vấn: <b>1900 555 888</b></div>
                  <div class="content mb-3"><img src="{{asset('assets/images/icons/gmail-white.svg')}}"> Email: <b>support@vdiamond.vn</b></div>
                  <div class="content"><img src="{{asset('assets/images/icons/facebook-white.svg')}}"> Fanpage: <b>Nội thất cao cấp vdiamond</b></div>
                </div>
                <div class="col-12 mt-4 mb-3">
                  <h4 class="text-upper mb-3">Liên hệ với chúng tôi</h4>
                  <div class="content mb-3">- Vincom Plaza Hải Phòng Số 4 Lê Thánh Tông, Máy Tơ, Ngô Quyền, Hải Phòng</div>
                  <div class="content">- AEON MALL Hải Phòng Số 10 Võ Nguyên Giáp, Kênh Dương, Lê Chân, Hải Phòng</div>
                </div>
                <div class="col-12 mt-4 pb-3" style="border-bottom: 1px solid rgba(255, 255, 255, 0.35);">
                  <p class="payment-text">Chấp nhận thanh toán</p>
                  <img src="assets/images/icons/payment-list.png" alt="">
                </div>
                <div class="col-12 mt-4 mb-3" >
                  <p class="proof">Công Ty Cổ Phần Nội Thất Kim Cương Việt - Giấy phép kinh doanh số: 01160797 do Sở Kế hoạch và Đầu tư Thành phố Hải Phòng cấp ngày 16/07/2021</p>
                </div>
              </div>
            </div>
          </div>
    </footer>

 
    <!-- Footer Area End -->
 <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/mobile/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets/mobile/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('assets/mobile/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/mobile/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{!!asset('assets/mobile/js/plugins/infiniteslidev2.js')!!}"></script>
    <script src="{!!asset('assets/mobile/js/vendor/jquery.magnific-popup.min.js')!!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.sticky-sidebar.js')!!}"></script>
    <script src="{!!asset('assets/js/plugins/slick.min.js')!!}"></script>


    <!-- Main Js -->
    <script src="{!!asset('assets/mobile/js/vendor/index.js')!!}"></script>
    <script src="{!!asset('assets/mobile/js/main.js')!!}"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!-- //jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   
    <script type="text/javascript">
        
         jQuery(document).ready(function($) {

            $(".ec-mobile-menu-href").on("click", function(){
                  $("#ec-mobile-menu").addClass( "ec-open");
                  $('.ec-side-cart-overlay').show();
                });

                $('.ec-close').on('click',function(){
                  $("#ec-mobile-menu, #ec-side-cart").removeClass("ec-open");
                  $('.ec-side-cart-overlay').hide();
                });

                $(".ec-side-cart-href").on("click", function(){
                  $("#ec-side-cart").addClass( "ec-open");
                  $('.ec-side-cart-overlay').show();
                });

            $('#slide-carousel').owlCarousel({
              autoHeight: true,
              loop: true,
              nav: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 1
                }
              }
            });
        });
      
        jQuery(document).ready(function($) {
            $('#mobile-product-carousel').owlCarousel({
                autoHeight: true,
              loop: true,
              margin: 10,
              nav: true,
              responsive: {
                0: {
                  items: 2.2
                },
                600: {
                  items: 4.2
                }
              }
            });
        });

         jQuery(document).ready(function($) {
            $('#mobile-best-seller-carousel').owlCarousel({
              autoHeight: true,
              loop: true,
              margin: 8,   
              responsive: {
                0: {
                  items: 1.1
                },
                600: {
                  items: 2.1
                }
              }
            });
        });

         jQuery(document).ready(function($) {
            $('#mobile-top-product-carousel').owlCarousel({
              autoHeight: true,
              loop: true,
              margin: 8,   
              responsive: {
                0: {
                  items: 1.1
                },
                600: {
                  items: 2.1
                }
              }
            });
        });

         jQuery(document).ready(function($) {
            $('#mobile-best-product-carousel').owlCarousel({
                autoHeight: true,
              loop: true,
              margin: 8,   
              responsive: {
                0: {
                  items: 1.1
                },
                600: {
                  items: 2.1
                }
              }
            });
        });

         jQuery(document).ready(function($) {
            $('#mobile-luxury-product-carousel').owlCarousel({
                autoHeight: true,
              loop: true,
              margin: 8,   
              responsive: {
                0: {
                  items: 1.1
                },
                600: {
                  items: 2.1
                }
              }
            });
        });

         jQuery(document).ready(function($) {
            $('#banner-carousel').owlCarousel({
              autoHeight: true,
              loop: true,
              margin: 8,   
              responsive: {
                0: {
                  items: 1.1
                },
                600: {
                  items: 2.1
                }
              }
            });
        });






    
</script>

</body>

<!-- Mirrored from loopinfosol.in/themeforest/ekka-html/ekka-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Oct 2021 01:22:42 GMT -->
</html>