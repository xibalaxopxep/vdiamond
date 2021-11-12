@extends('frontend.layouts.master')
@section('content') 
    <!-- ekka Cart Start -->
    <style type="text/css">
        .slick-dots li.slick-active button:before {
             color: white;
        }

        .slick-dots li button:before {
             color:  rgba(255, 255, 255, 0.5);
        }

        .slick-dots{
            bottom: 50px;
        }


    </style>
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/6_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/12_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{asset('assets/images/product-image/3_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb" style="height:130px; background-image: url('/assets/images/background/breakcum.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <ul style="float:left;" class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
   <style type="text/css">
      
   </style>
    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container" style="padding-left: 0px !important; padding-right: 0px !important;">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img single-pro-img-no-sidebar">
                                   <div class="slider-for">
                                        <div><img style="width: 100%; " src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img style="width: 100%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img style="width: 100%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img style="width: 100%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img style="width: 100%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                    </div>

                                    <div class="slider-nav">
                                        <div><img class="img-thumbnail" style="width: 95%; " src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img class="img-thumbnail" style="width: 95%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img class="img-thumbnail" style="width: 95%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img class="img-thumbnail" style="width: 95%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                        <div><img class="img-thumbnail" style="width: 95%;" src="{{asset('assets/images/product/image1.png')}}"></div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{$record->title}}</h5>
                                        <div class="ec-single-rating-wrap">
                                            <span class="ec-read-review"><a href="#ec-spt-nav-review">{{$record->model}}</a></span>
                                        </div>
                                    
                                       
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price ">
                                                <span style="margin-right: 30px;" class="old-price">{{$record->getPrice()}}</span>
                                                <span class="new-price">{{$record->getSalePrice()}}</span>
                                            </div>
                                            <div data-product_id="{{$record->id}}" class="btn btn-light ec-single-stoke col-0 add-to-cart">
                                                <span class="ec-single-sku"><img src="{{asset('assets/images/icons/cart-detail.svg')}}"> Thêm vào giỏ hàng </span>
                                            </div>
                                        </div>

                                        <div class="ec-single-sales">
                                            <div class="ec-single-sales-inner">
                                                <div class="ec-single-sales-title">sales accelerators</div>
                                                <div class="ec-single-sales-visitor"><img src="{{asset('assets/images/icons/discount.svg')}}">  Giảm <span>200.000₫</span> khi đặt hàng online</div>
                                                <div class="ec-single-sales-visitor"><img style="width: 22px; height: 22px;" src="{{asset('assets/images/icons/freeship.svg')}}">  Miễn phí vận chuyển <a href="#">(xem chi tiết)</a></div>
                                                <div class="ec-single-sales-visitor"><img src="{{asset('assets/images/icons/change.svg')}}">  Đổi trả trong 3 ngày <a href="#">(xem chi tiết)</a></div>
                                                <div class="ec-single-sales-visitor"><img src="{{asset('assets/images/icons/freework.svg')}}">  Miễn phí lắp đặt <a href="#">(xem chi tiết)</a></div>
                                            </div>
                                        </div>

                                        <div class="ec-pro-variation"> 
                                            <div style="display: flex;" class="ec-pro-variation-inner ec-pro-variation-color">
                                                <div class="row">
                                                <span class="col-md-2 col-xs-12">Màu sắc:</span>
                                                <div class="ec-pro-variation-content col-md-8">
                                                    <ul>
                                                        @foreach($colors as $color)
                                                        <li class="color-active"><span
                                                                style="background-color: {{$color->color}};"></span></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <!-- <div class="qty-plus-minus col-md-2">
                                                <input style="height: 32px;" class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                                </div> -->
                                            </div>
                                            </div>
                                        </div>
                                       <form method="post" action="{{route('addToCart', $record->id)}}">
                                        @csrf
                                        <div class="row" style="padding-left: 0px !important;">
                                            
                                            <div class="col-md-6 col-xs-6 col-6">
                                                <button style="width: 100%; height: 60px;" class="btn btn-buy">
                                                    <div style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 16px; line-height: 22px; color: #FFFFFF;" class="buy-now">Mua ngay</div>
                                                    <div style="font-family: Open Sans; font-style: normal; font-weight: normal; font-size: 14px; line-height: 19px; color: #FFFFFF;" class="gop">Mua trả góp</div>
                                                </button>
                                            </div>
                                            
                                             <div class="col-md-6 col-xs-6 col-6">
                                                <button style="width: 100%; height: 60px; background-color: #004A8E;" class="btn">
                                                    <div style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 16px; line-height: 22px; color: #FFFFFF;" class="buy-now">Mua trả góp</div>
                                                    <div style="font-family: Open Sans; font-style: normal; font-weight: normal; font-size: 14px; line-height: 19px; color: #FFFFFF;" class="gop">trả góp qua thẻ</div>
                                                </button>
                                            </div>  
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Chi tiết sản phẩm</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <ul class="disable-list-style">
                                            @foreach($attributes as $key => $attr)
                                                <li class=""><span class="text-1 col-md-4">{{$attributes[$key]->parent_name}}: </span><span class="text-2 col-md-8">{{$attr[0]->title}}</span></li>
                                            @endforeach
                                            <!-- <li><span class="text-1 col-md-4">Kích thước: </span><span class="text-2">2m x 1.6m</span></li>
                                            <li><span class="text-1 col-md-4">Màu sắc: </span><span class="text-2">Vàng, xám, đỏ đô, xanh, be </span></li>
                                            <li><span class="text-1 col-md-4">Nệm mút: </span><span class="text-2">Mút cao su thiên nhiên</span></li>
                                            <li><span class="text-1 col-md-4">Chất liệu: </span><span class="text-2">Gỗ sồi 7 năm Việt Nam</span></li>
                                            <li><span class="text-1 col-md-4">Bảo hành: </span><span class="text-2">15 năm</span></li> -->
                                        </ul>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- feedback Product Start -->
    <section class="section ec-releted-product feedback-product section-space-p">
        <div class="container">
            <div class="row">
                <h2 class="ec-title-customer text-upper">Hình ảnh thực tế - khách hàng đã mua</h2>
            </div>
       
                <div class="owl-carousel" id="feedback-carousel">
                   
                        <img style="height: 200px; border-radius: 7px;" src="{{asset('assets/images/product/image1.png')}}">
                        <img style="height: 200px; border-radius: 7px;" src="{{asset('assets/images/product/image1.png')}}">
                        <img style="height: 200px; border-radius: 7px;" src="{{asset('assets/images/product/image1.png')}}">
                    </div>
              
        </div>
    </section>

    <!-- feedback Product end -->

    <!-- Related Product Start -->
    <section class="section ec-releted-product section-space-p">
        <div  class="container">
             <div class="row">
                <h2 class="ec-title-related text-upper">sản phẩm liên quan</h2>
            </div>
            <div class="owl-carousel" id="related-carousel">
            
                <div class="ec-product-inner border-product">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img style="height: 213px; object-fit: cover;" class="main-image"
                                    src="{{asset('assets/images/product/image1.png')}}" alt="Product" />
                                <!-- <img class="hover-image"
                                    src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                            </a>
                            <!-- <span class="flags-sale flags">
                                <span style="margin-top: " class="sale">Sale</span>
                            </span>
                             <span class="flags-new flags">
                                <span class="new">New</span>
                            </span> -->
                         
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sản phẩm sofa</a></h5>
                        <p style="text-align: center;">Model: VD123</p>
                        <span class="ec-price" style="justify-content: center !important;">
                          
                            <span style="float: left; padding-right: 10px;" class="new-price">45.000.000đ</span>
                            <span style="float: right; padding-left: 10px;" class="old-price">45.000.000đ</span>
                        </span>
                        
                    </div>
                </div>
                         
            </div>
        </div>
    </section>


    <!-- Related Product end -->

    @stop