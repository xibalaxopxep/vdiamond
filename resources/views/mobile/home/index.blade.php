@extends('mobile.layouts.master')
@section('content')
   <style type="text/css">
       .carousel-mobile{
          text-align: center;
           width: 100%;
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
       }

       .carousel-mobile h1{
         color: #fff;
         font-size: 13px;

       }

       .carousel-mobile h2{
         color: #fff;
         font-size: 18px;

       }
   </style>
      <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="owl-carousel owl-theme" id="slide-carousel">
            @foreach($slides as $slide)
            @if($slide->position == 1)
            <div class="carousel-item active">
              <img class="d-block w-100 responsive" style="height: 250px; object-fit: cover;" src="{{url($slide->image)}}" alt="First slide">
              <div class="carousel-mobile pr-3 pl-3 mt-2">
              <div class="carousel-content">
                <h1 class="text-upper slide-text-1">{{$slide->title}}</h1>
                <h2 class="text-upper slide-text-2">{{$slide->product_name}}</h2>
                <button style=" filter: drop-shadow(0px 3px 12px rgba(255, 111, 0, 0.69)); background-color: #FF6F00;  border-radius: 0px; width: 115px; height:  auto;" class="btn mt-4"><a target="_blank" style="color: white; font-size: 13px;" href="{{$slide->url}}">{{$slide->button_text}}</a></button>
              </div>
              </div>
            </div>
            @endif
            @endforeach
            
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
                                @foreach($new_products as $new_pro)
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
                                        <div class="ec-pro-content pl-1 pr-1" style="padding-top: 0px !important;">
                                            <h4 style="line-height: 0.9 !important;"><a class="title" href="product-left-sidebar.html">{{$new_pro->title}}</a></h4>
                                            <div class="new-price">{{$new_pro->getSalePrice()}}</div>
                                            @if($new_pro->price > 0)
                                            <div class="old-price">{{$new_pro->getPrice()}}</div>
                                            @else
                                            <div class="order">Liên hệ đặt hàng</div>
                                            @endif
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <div style="" class="container">
                                     <span>Xem tất cả <span class="number-product">{{($popular_total)}}</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                                </div>
                               
                          
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men">
                              <div class="owl-carousel owl-theme" id="mobile-product-carousel1">
                                @foreach($hot_products as $hot_pro)
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
                                        <div class="ec-pro-content pl-1 pr-1" style="padding-top: 0px !important;">
                                            <h4 style="line-height: 0.9 !important;"><a class="title" href="product-left-sidebar.html">{{$hot_pro->title}}</a></h4>
                                            <div class="new-price">{{$hot_pro->getSalePrice()}}</div>
                                            @if($hot_pro->price > 0)
                                            <div class="old-price">{{$hot_pro->getPrice()}}</div>
                                            @else
                                            <div class="order">Liên hệ đặt hàng</div>
                                            @endif
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <div style="" class="container">
                                     <span>Xem tất cả <span class="number-product">{{($popular_total)}}</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
                                </div>
                                
                   
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women">
                              <div class="owl-carousel owl-theme" id="mobile-product-carousel2">
                                @foreach($combo_products as $combo_pro)
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
                                        <div class="ec-pro-content pl-1 pr-1" style="padding-top: 0px !important;">
                                            <h4 style="line-height: 0.9 !important;"><a class="title" href="product-left-sidebar.html">{{$combo_pro->title}}</a></h4>
                                            <div class="new-price">{{$combo_pro->getSalePrice()}}</div>
                                            @if($combo_pro->price > 0)
                                            <div class="old-price">{{$combo_pro->getPrice()}}</div>
                                            @else
                                            <div class="order">Liên hệ đặt hàng</div>
                                            @endif
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <div style="" class="container">
                                     <span>Xem tất cả <span class="number-product">{{($popular_total)}}</span> sản phẩm phổ thông <img src="assets/images/icons/right.svg"><span>
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
                        @php
                           $index = 0;
                           $sum_best_pro_page = ceil(count($best_sell_products) / 3);
                        @endphp
                        @for($i = 0 ; $i < $sum_best_pro_page; $i++)
                        <div class="row  no-padding" >
                            
                            @foreach($best_sell_products as $key => $best_pro)
                            @if($key >= $index)
                            <div class="row  no-padding pb-2">
                                <div class="col-7 no-padding" >
                                    <img style="height: 137px; object-fit: cover;" src="assets/images/product/image1.png">
                                </div>
                                <div  class="col-5 no-padding best-seller-content">
                                    <h4><a class="title" href="#">{{$best_pro->title}}</a></h4>
                                    <div class="new-price">{{$best_pro->getSalePrice()}}</div>
                                    <div class="old-price">{{$best_pro->getPrice()}}</div>
                                </div>
                            </div> 
                            @else
                            @continue;
                            @endif
                            @php
                               $index++;
                               if($index%3 == 0){
                                  break;
                               }   
                            @endphp
                            @endforeach
                           
                        </div>
                         @endfor

                    </div>
                </div>
                   <div style="" class="polular-container-button">
                            <span style="">Xem tất cả <span style="color: #ff2e00; font-weight: bold;"  class="number-product">{{count($best_sell_products)}}</span> sản phẩm bán chạy <img src="assets/images/icons/right.svg"><span>
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
                        @foreach($advance_products as $advance_product)
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="{{url($advance_product->image)}}" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">{{$advance_product->title}}</a></h4>
                                        <div style="display: flex;">
                                        <div class="new-price">{{$advance_product->getPrice()}}</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                           
                    </div>
                    <div style="" class="container-button">
                            <span style="color: white;">Xem tất cả <span style="color: #FA6400; font-weight: bold;"  class="number-product">{{count($advance_products)}}</span> sản phẩm cao cấp <i style="color: #fff;" class="fas fa-caret-right"></i><span>
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
                        @foreach($luxury_products as $lux_product)
                            <div class="ec-product-content" >
                                <div  class="ec-product-inner" style="">
                                    <div  class="ec-pro-image-outer">
                                        <div  class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img style=" border-radius: 7px;" class="main-image"
                                                    src="{{url($lux_product->image)}}" alt="Product" />  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-product-content-mobile" style="">
                                        <h4><a class="title" href="product-left-sidebar.html">{{$lux_product->title}}</a></h4>
                                        <div style="display: flex;">
                                        <div class="new-price">{{$lux_product->getPrice()}}</div>
                                        <div class="arrow-right" style=""><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <div class="contact"><i class="fa fa-phone-alt" aria-hidden="true"></i> Liên hệ đặt hàng</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach        
                    </div>
                    <div style="" class="container-button">
                            <span style="color: white;">Xem tất cả <span style="color: #FA6400; font-weight: bold;"  class="number-product">{{count($luxury_products)}}</span> sản phẩm thượng lưu <i style="color: #fff;" class="fas fa-caret-right"></i><span>
                    </div>
            </div>       
        </div>
    </section>

    <section class="section ec-product-tab section-space-p">
            <div class="row">
                <div style="margin-left: 10px;" class="owl-carousel owl-theme" id="banner-carousel">
                
                    @foreach($slides as $slide)
                     @if($slide->position == 3)

                     <div class="">
                        <a target="_blank" href="{{$slide->url}}"><img src="{{url($slide->image)}}"></a>
                     </div>
                     @endif
                    @endforeach
                </div>
            </div>
    </section>

     <section class="section ec-product-tab section-space-p margin-top">
            <div class="container">
                <h2 class="text-upper popular-text">Xu hướng mua sắm</h2>
                <div class="row popular-mobile">
                     @foreach($trends as $trend)
                        <div class="col-6 mb-3">
                        <button style="width: 100%; height: auto" class="btn btn-grey">
                           <img src="{{url($trend->image)}}">
                           <h4 style="line-height: 12px;" class="mt-2">{{$trend->title}}</h4>
                         <!--   <p>1200 sản phẩm</p> -->
                       </button>
                    </div>
                     @endforeach
                    
                    </div>
                </div>
            </div>
     </section>

    <!--  <section class="section ec-product-tab section-space-p" style=" background: #F3F1F1; height: 520px;">
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
 -->
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
 