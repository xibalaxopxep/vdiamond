@extends('mobile.layouts.master')
@section('content')
      <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="owl-theme owl-carousel" id="slide-carousel">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content ">
                                    <h2 class="ec-slide-stitle text-upper">SẢN PHẨM MỚI</h2>
                                    <h1 class="ec-slide-title text-upper">Bộ ghế phòng khách linh hoạt</h1>
                                    <a href="#" class="btn btn-lg btn-secondary text-upper">Mua ngay</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div style="text" class="ec-slide-item swiper-slide d-flex ec-slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">sản phẩm hot</h2>
                                    <h1 class="ec-slide-title">Bộ ghế phòng khách hot</h1>
                                    <a href="#"  class="btn btn-lg btn-secondary text-upper">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>
</div>
    <!-- Main Slider End -->
     
    <!-- Danh mục -->
    <div class="row container category-mobile">
        <div class="col-4 col-sm-4">
            <img class="cat-image" src="assets/mobile/images/category/new.png">
            <p class="cat-text">Khách đã mua</p>
        </div>
        <div class="col-4 col-sm-4">
           <img class="cat-image" src="assets/mobile/images/category/new.png">
           <p class="cat-text">Bộ sưu tập mới nhất</p>
        </div>
        <div class="col-4 col-sm-4">
           <img class="cat-image" src="assets/mobile/images/category/new.png">
           <p class="cat-text">Thế giới sofa</p>
        </div>
    </div>


    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title text-upper">sản phẩm phổ thông</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">
                                Sản phẩm mới</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">
                                Sản phẩm nổi bật</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">
                                Sản phẩm giá tốt</a></li>
                        
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                    <div class="tab-content mobile-tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                   
                                <div class="owl-carousel owl-theme" id="mobile-product-carousel">
                                  <div class="ec-product-content" >
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img style="height: 130px; " class="main-image"
                                                        src="assets/images/product/image1.png" alt="Product" />  
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content" style="padding: 0px !important;">
                                            <h4><a class="title" href="product-left-sidebar.html">Sản phẩm mẫu VD01</a></h4>
                                            <div class="product-material">Chất liêu da: cao cấp</div>
                                            <div class="new-price">$25.00</div>
                                            <div class="old-price">$30.00</div>
                                            <div class="order">Liên hệ đặt hàng</div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div style="" class="container">
                                     <span>Xem tất cả <span class="number-product">456</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                                </div>
                               
                          
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men">
                            <div class="row">
                                <!-- Product Content -->
                                
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women">
                            <div class="row">
                                <!-- Product Content -->                                
                                
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                        <!-- ec 4th Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-child">
                            <div class="row">
                                <!-- Product Content -->                                
                               
                              
                              
                                
                                
                                                          
                              
                               
                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 4th Product tab end -->
                    </div>
            </div>
  
    </section>
    <!-- ec Product tab Area End -->
    

    <!-- Sản phẩm bán chạy -->
    <section class="section ec-product-tab section-space-p margin-top" style="margin-top: -5px !important; margin-bottom: -50px !important;">
            <div class="row mobile-best-seller" style=" height:820px; background-image: linear-gradient(to right, #FFCC33, #FFB347);">
                <!--  <img style=" margin-left: 55%;  display: inline-block; height: 30%; padding: 21px; vertical-align: middle;" src="assets/frontend/images/another/best-seller.png"> -->
                <div class="section-title">
                    <h2 class="mobile-ec-title text-upper">top sản phẩm <br> bán chạy giá tốt</h2>
                    <div  class="mobile-ec-content">Các mẫu sản phẩm được ưa chuộng, săn đón nhất trong năm 2021</div>
                    <div class="container">
                     <div class="owl-carousel owl-theme" id="mobile-best-seller-carousel">

                        <div class="row  no-padding" >
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;" src="assets/images/product/image1.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div> 
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;" src="assets/images/product/image1.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div>
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;" src="assets/images/product/image1.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div> 
                        
                        </div>

                        <div class="row  no-padding" >
                            <div class="row no-padding pb-2" >
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;" src="assets/images/product/image2.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div> 
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img  style="height: 137px; object-fit: cover;" src="assets/images/product/image2.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div>
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;"  src="assets/images/product/image2.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">Round Neck T-Shirt</a></h4>
                                    <div class="product-material">Chất liêu da: cao cấp</div>
                                    <div class="new-price">$25.00</div>
                                    <div class="old-price">$30.00</div>
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </div>
                   <div style="" class="polular-container-button">
                            <span style="">Xem tất cả <span style="color: #ff2e00; font-weight: bold;"  class="number-product">456</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                    </div>
                </div>

            </div>
    </section>
    <!-- end best seller -->
    


    <!-- sản phẩm cao cấp -->
    <section class="section ec-product-tab section-space-p margin-top">
        <div class="row mobile-top-product" style=" height:750px; background-image: url('assets/images/background/top-mobile.png')">
            <!--  <img style=" margin-left: 55%;  display: inline-block; height: 30%; padding: 21px; vertical-align: middle;" src="assets/frontend/images/another/best-seller.png"> -->
            <div class="section-title">
                <h2 class="mobile-top-title text-upper">Sản phẩm cao cấp</h2>
                <div  class="mobile-top-content">Sản phẩm cao cấp được các nhà thiết kế thổi hồn giúp bạn định hình “Phong Cách Sống”</div>
                   
                    <div  class="owl-carousel owl-theme" style=" padding-left: 40px;" id="mobile-top-product-carousel">
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Round Neck T-Shirt</a></h4>
                                        <div class="product-material">Chất liêu da: cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div  class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Bộ sofa cao cấp VD147</a></h4>
                                        <div class="product-material">Chất liêu: Da cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div style="" class="container-button">
                            <span style="color: white;">Xem tất cả <span style="color: #FA6400; font-weight: bold;"  class="number-product">456</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                    </div>
              
            </div>
                  
        </div>
    </section>
   <!--  end sp cao cấp -->
     
   <!--   sp thượng lưu -->
     <section class="section ec-product-tab section-space-p margin-top">
        <div class="row mobile-luxury-product" style=" height:950px; background-image: url('assets/images/background/best-mobile.png')">
            <div class="container " style="text-align:  center;" >
                <img class="vip-top" src="assets/images/banner/vip-top.png">  
                <img class="vip-middle" style="z-index: 10; " src="assets/images/banner/vip.png">  
                <img class="vip-bottom" src="assets/images/banner/vip-bottom.png">  
            </div>
            <div class="section-title" style="margin-top: -95px !important;">
                <div  class="mobile-luxury-content">V DIAMOND mang đến cho Quý khách hàng những sản phẩm nội thất cổ điển mang “hơi thở của thời gian”</div>
                    <div  class="owl-carousel owl-theme" style=" margin-top: 35px; padding-left: 40px;" id="mobile-luxury-product-carousel">
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner" style="">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Bộ Sofa cao cấp Elandor VD169</a></h4>
                                        <div class="product-material">Chất liệu da: cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Bộ Sofa cao cấp Elandor VD169</a></h4>
                                        <div class="product-material">Chất liêu da: cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Bộ Sofa cao cấp Elandor VD169</a></h4>
                                        <div class="product-material">Chất liêu da: cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="assets/images/product/image1.png" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div  class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">Bộ sofa cao cấp VD147</a></h4>
                                        <div class="product-material">Chất liêu: Da cao cấp</div>
                                        <div style="display: flex;">
                                        <div class="new-price">$25.00</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div style="" class="container-button">
                            <span style="color: white;">Xem tất cả <span style="color: #FA6400; font-weight: bold;"  class="number-product">456</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                    </div>
            </div>       
        </div>
    </section>

    <section class="section ec-product-tab section-space-p">
            <div class="row">
                <div style="margin-left: 10px;" class="owl-carousel owl-theme" id="banner-carousel">
                     <div class="">
                        <img src="assets/images/banner/banner-doi-1.png">
                     </div>
                     <div class="">
                        <img src="assets/images/banner/banner-doi-2.png">
                     </div>
                </div>
            </div>
    </section>

     <section class="section ec-product-tab section-space-p margin-top">
            <div class="container">
                <h2 class="text-upper popular-text">Xu hướng mua sắm</h2>
                <div class="row popular-mobile">
                    <div class="col-6">
                       <button style="width: 100%; height: auto" class="btn btn-grey">
                           <img src="assets/images/icons/sofa.svg">
                           <h4>Ghế Sofa</h4>
                           <p>1200 sản phẩm</p>
                       </button>
                    </div>
                     <div class="col-6">
                        <button style="width: 100%; height: auto" class="btn btn-grey">
                           <img src="assets/images/icons/sofa.svg">
                           <h4>Ghế Sofa</h4>
                           <p>1200 sản phẩm</p>
                       </button>
                    </div>
                </div>
            </div>
     </section>

     <section class="section ec-product-tab section-space-p" style=" background: #F3F1F1; height: 520px;">
            <div class="container">
                <h2 class="text-upper popular-text">Cẩm nang nội thất</h2>
                <div class="owl-carousel owl-theme" id="news-mobile">
                    <div class="row news-mobile">
                        <div class="row mb-4">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                    </div>
                    <div class="row news-mobile">
                        <div class="row mb-4">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-8">
                              <h3 class="overflow-auto">Sofa nỉ cao cấp, Thiết kế đẳng cấp và thoải mái</h3>
                              <ul>
                                  <li>12 phút</li>
                                  <li class="ml-1 mr-1"><img style="display: inline; width: 5px;" src="{{asset('assets/images/icons/circle.svg')}}"></li>
                                  <li>Fotograph</li>
                              </ul>
                           </div>
                           <div class="col-4">
                              <img src="{{asset('assets/images/news/news1.png')}}">
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
     </section>

    <style type="text/css">

        .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
              background: white;
              height: 10px;
              width: 30px;
        }

        .owl-theme .owl-dots .owl-dot span{
            color: rgba(255, 255, 255, 0.5);
        }

        .owl-theme .owl-nav.disabled+.owl-dots {
            margin-top: 24px;px;
        }
     
    </style>


    

    <!-- Footer Area End -->

   
  
    <!-- Vendor JS -->
    @stop
 