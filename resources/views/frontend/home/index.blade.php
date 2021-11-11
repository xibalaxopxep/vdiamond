@extends('frontend.layouts.master_index')
@section('content')
    <div class="" style="position: fixed; left: 0; z-index: 9999; top:20%;">
    	<!-- <div class="row" >
    		<div class="col-md-12" >
    			<img src="assets/images/icons/fixed-1.svg">
    			<span style="text-align: left; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Sản phẩm mới</span>
    		</div>
    		<div class="col-md-12">
    		</div>
    		<div class="col-md-12">
    		</div>
    		<div class="col-md-12">
    		</div>
    	</div> -->
    </div>
       <div style="max-width: 1388px !important ;" class="policy container">
            <div style="display:   flex;" class="">
                <div class="col-md-3 row">
                    <div class="col-md-4">
                        <img src="assets/frontend/images/icons/freeship.svg">
                    </div>
                    <div style="margin-left: -52px;" class="col-md-8">
                        <div class="text-upper policy-text">MIỄN PHÍ VẬN CHUYỂN</div>
                        <div class="policy-content">Đơn hàng tối thiểu 10.000.000 ₫</div>
                    </div>
                </div>
                 <div class="col-md-3 row">
                    <div class="col-md-4">
                        <img src="assets/frontend/images/icons/freeship.svg">
                    </div>
                    <div style="margin-left: -52px;" class="col-md-9">
                        <div class="text-upper policy-text">MIỄN PHÍ VẬN CHUYỂN</div>
                        <div class="policy-content">Đơn hàng tối thiểu 10.000.000 ₫</div>
                    </div>
                </div>
                 <div class="col-md-3 row">
                    <div class="col-md-4">
                        <img src="assets/frontend/images/icons/freeship.svg">
                    </div>
                    <div style="margin-left: -52px;" class="col-md-8">
                        <div class="text-upper policy-text">MIỄN PHÍ VẬN CHUYỂN</div>
                        <div class="policy-content">Đơn hàng tối thiểu 10.000.000 ₫</div>
                    </div>
                </div>
                 <div class="col-md-3 row">
                    <div class="col-md-4">
                        <img src="assets/frontend/images/icons/freeship.svg">
                    </div>
                    <div style="margin-left: -52px;" class="col-md-8">
                        <div class="text-upper policy-text">MIỄN PHÍ VẬN CHUYỂN</div>
                        <div class="policy-content">Đơn hàng tối thiểu 10.000.000 ₫</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="owl-carousel owl-theme" id="slide-carousel">
            @foreach($slides as $slide)
            <div class="carousel-item active">
              <img class="d-block w-100 responsive" style="height: 648px;" src="{{url($slide->image)}}" alt="First slide">
              <div class="carousel-content">
                <h1 class="text-upper slide-text-1">{{$slide->title}}</h1>
                <h2 class="text-upper slide-text-2">{{$slide->product_name}}</h2>
                <p class="text-upper slide-text-3">{{$slide->caption}}</p>
                <button style=" filter: drop-shadow(0px 3px 12px rgba(255, 111, 0, 0.69)); background-color: #FF6F00; color: white; border-radius: 0px; width: 161px; height:  40px;" class="btn">{{$slide->button_text}}</button>
              </div>
            </div>
            @endforeach
            
        </div>

     
        <div class="container" style="margin-top: 20px;">
            <div class="row mt-3 ">
                <div class="col-md-4 radius-image">
                    <img style="width: 100%;" src="assets/images/images/image3.png">
                </div>
                <div class="col-md-4 radius-image">
                     <img style="width: 100%;" src="assets/images/images/image4.png">
                </div>
                <div class="col-md-4 radius-image">
                     <img style="width: 100%;" src="assets/images/images/image3.png">
                </div>
            </div>
        </div>
            <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title" style="color: black;">SẢN PHẨM PHỔ THÔNG</h2>
                        <h2 class="ec-title" style="color: black; line-height: 36px; font-size: 30px;">SẢN PHẨM PHỔ THÔNG</h2>
                        <p class="sub-title text-upper" style="padding: 0; font-weight: 400;">Chào đón bạn đến với những ý tưởng sáng tạo khơi nguồn cảm hứng cho không gian sống đẹp và tiện ích !</p>
                        <img src="assets/images/icons/popular-product.png">

                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul style="padding-bottom: 30px;" class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all" style="font-weight: bold; text-transform: capitalize;">Sản Phẩm Mới</a></li>
                        <li class="nav-item"><a style="font-weight: bold; text-transform: capitalize;" class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">
                                Sản Phẩm Nổi Bật</a></li>
                        <li class="nav-item"><a style="font-weight: bold; text-transform: capitalize;" class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">
                            Combo Giá Tốt</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="owl-carousel owl-theme" id="popular-new">
                                @php
                                $avg = ceil(count($new_products)/8);
                                $index = 0;
                                @endphp
                                @for($new = 0; $new < $avg; $new++)
                                <div class="row">
                                    <!-- Product Content -->
                                    @foreach($new_products as $key => $new_pro)
                                    @if($key >= $index)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                        <div class="ec-product-inner border-product">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{route('product.detail', $new_pro->alias)}}" class="image">
                                                        <img style="height: 213px; object-fit: cover;" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="{{route('product.detail', $new_pro->alias)}}">{{$new_pro->title}}</a></h5>
                                                <p style="text-align: center;">{{$new_pro->model}}</p>
                                                <span class="ec-price" style="justify-content: center !important;">
                                                    <span style="" class="new-price">{{number_format($new_pro->price)}}đ</span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @continue;
                                    @endif
                                    @php
                                       $index++;
                                       if($index%8 == 0){
                                          break;
                                       }   
                                    @endphp
                                    @endforeach 
                                </div>
                                @endfor
                            </div>
                             <div style="position: absolute;  right: 0%; margin-top:  25px;
    "  ><a style=" color:#FF6F00; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right.png"></a></div>
                        </div>
                        
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men">
                           <div class="owl-carousel owl-theme" id="popular-hot">
                                @php
                                $avg = ceil(count($hot_products)/8);
                                $index = 0;
                                @endphp
                                @for($hot = 0; $hot < $avg; $hot++)
                                <div class="row">
                                    <!-- Product Content -->
                                    @foreach($hot_products as $key => $hot_pro)
                                    @if($key >= $index)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                        <div class="ec-product-inner border-product">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{route('product.detail', $hot_pro->alias)}}" class="image">
                                                        <img style="height: 213px; object-fit: cover;" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="{{route('product.detail', $hot_pro->alias)}}">{{$hot_pro->title}}</a></h5>
                                                <p style="text-align: center;">{{$hot_pro->model}}</p>
                                                <span class="ec-price" style="justify-content: center !important;">
                                                  
                                                    <span style="" class="new-price">{{number_format($hot_pro->price)}}đ</span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @continue;
                                    @endif
                                    @php
                                       $index++;
                                       if($index%8 == 0){
                                          break;
                                       }   
                                    @endphp
                                    @endforeach 
                                </div>
                                @endfor
                            </div>
                             <div style="position: absolute;  right: 0%; margin-top:  25px;
    "  ><a style=" color:#FF6F00; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right.png"></a></div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women">
                                <div class="owl-carousel owl-theme" id="popular-combo">
                                @php
                                $avg = ceil(count($combo_products)/8);
                                $index = 0;
                                @endphp
                                @for($combo = 0; $combo < $avg; $combo++)
                                <div class="row">
                                    <!-- Product Content -->
                                    @foreach($combo_products as $key => $combo_pro)
                                    @if($key >= $index)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                        <div class="ec-product-inner border-product">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{route('product.detail', $combo_pro->alias)}}" class="image">
                                                        <img style="height: 213px; object-fit: cover;" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                       
                                                    </a>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="{{route('product.detail', $combo_pro->alias)}}">{{$combo_pro->title}}</a></h5>
                                                <p style="text-align: center;">{{$combo_pro->model}}</p>
                                                <span class="ec-price" style="justify-content: center !important;">
                                                  
                                                    <span style="" class="new-price">{{number_format($combo_pro->price)}}đ</span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @continue;
                                    @endif
                                    @php
                                       $index++;
                                       if($index%8 == 0){
                                          break;
                                       }   
                                    @endphp
                                    @endforeach 
                                </div>
                                @endfor
                            </div>
                             <div style="position: absolute;  right: 0%; margin-top:  25px;
    "  ><a style=" color:#FF6F00; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right.png"></a></div>
                        </div>

                 
                  
                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--  //best seller -->
    <section>


    	<div style="height: 1244px;" class="row">
            <div  class="best-seller-description">
            	<div class="best-seller-header best-seller-heading">
                     TOP SẢN PHẨM BÁN CHẠY GIÁ TỐT
            	</div>
            	<span class="best-seller-content">
                    Các mẫu sản phẩm được ưa chuộng, săn đón nhất trong năm 2021
            	</span>
            	<div  class="container container-best-seller product-best-seller">
            		<div class="owl-carousel owl-theme" id="best-seller-carousel">
    	            	<div style="margin-top: 20px;" class="row"  style="">
    	            	    <div class="col-md-3">
    	            	     
    	            	        	<div class="list-product-best-seller ec-product-content" >
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                    
                                                    <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
    	            	    
    	            	        <div class="ec-product-content list-product-best-seller" >
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>

    	            	    </div>
    	            	    <div class="col-md-6">

    	            	    	<div  class="ec-product-content list-product-best-seller">
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image" style="height: 620px;">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="object-fit: cover; height: 620px;" class="main-image"
                                                            src="assets/images/product/image2.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img  src="assets/images/icons/sp-ban-chay2.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	    </div>
    	            	    <div class="col-md-3 ">
    	            	     	 <div class="list-product-best-seller ec-product-content">
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                                
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	        <div class=" list-product-best-seller ec-product-content">
                                        <div class="ec-product-inner">
                                        	
                                            <div class="ec-pro-image-outer">
                                                <div  class="ec-pro-image">
                                       
                                                    <a  href="product-left-sidebar.html" class="image">
                                                        <img   class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	    </div>
    	            	</div>
    	            	<div class="row"  style="">
    	            	    <div class="col-md-3">
    	            	     
    	            	        	<div class="list-product-best-seller ec-product-content" >
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	    
    	            	        <div class="ec-product-content list-product-best-seller" >
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>

    	            	    </div>
    	            	    <div class="col-md-6">

    	            	    	<div  class="ec-product-content list-product-best-seller">
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image" style="height: 620px;">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="object-fit: cover; height: 620px;" class="main-image"
                                                            src="assets/images/product/image2.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img  src="assets/images/icons/sp-ban-chay2.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	    </div>
    	            	    <div class="col-md-3 ">
    	            	     	 <div class="list-product-best-seller ec-product-content">
                                        <div class="ec-product-inner border-best-seller">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="" class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div style="text-align: center;" class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                                
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	        <div class=" list-product-best-seller ec-product-content">
                                        <div class="ec-product-inner">
                                        	
                                            <div class="ec-pro-image-outer">
                                                <div  class="ec-pro-image">
                                       
                                                    <a  href="product-left-sidebar.html" class="image">
                                                        <img   class="main-image"
                                                            src="assets/images/product/image1.png" alt="Product" />
                                                        <!-- <img class="hover-image"
                                                            src="assets/images/product-image/7_2.jpg" alt="Product" /> -->
                                                    </a>
                                                    <span class="percentage"><img style="overflow: none !important;" src="assets/images/icons/sp-ban-chay.png"></span>
                                                    <span class="flags-sale flags">
                                                        <span class="sale">Sale</span>
                                                    </span>
                                                     <span class="flags-new flags">
                                                        <span class="new">New</span>
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                             <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span  class="model-product">Model: VD167</span>
                                                </div>
                                               
                                                 <span style="margin:auto; display:table;" class="ec-price mb-2">
                                                	<span class="new-price">10.000.000 đ</span>
                                                    <span class="old-price ">12.000.000 đ</span>   
                                                </span>
                                                
                                            </div>
                                        </div>
                                    </div>
    	            	    </div>
    	            	</div>
	                </div>
	            <div style="position: absolute;  right: 19%; margin-top:  40px;
    "  ><a style=" color:#000000; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right-black.svg"></a></div>
                </div>
            </div>



    		<div style="background-image: linear-gradient(to right, #FFCC33, #FFB347);" class="col-md-9">
    			
    		</div>

    		<div style="background-image: linear-gradient(to right, #EDDE5D, #F09819);" class="col-md-3">
    			   <img style=" margin-left: 55%;  display: inline-block; height: 100%; padding: 21px; vertical-align: middle;" src="assets/frontend/images/another/best-seller.png">
    		</div>
    	</div>


    	
    </section>
   
   <section>
        <div style="height: 1244px;" class="row">
            <div  class="best-seller-description">
            	<h2 style="bottom: 37; margin-top: 95px !important;" class="best-seller-heading">
                    SẢN PHẨM CAO CẤP
            	</h2>
            	<span style="max-width: 910px !important;" class=" container best-seller-content">
                   Những sản phẩm CAO CẤP được các nhà thiết kế, họa sỹ thổi hồn giúp khách hàng định hình "Phong Cách Sống"
            	</span>
            	<div  class=" product-best-seller">
	                        <!-- start news carousel -->
        <div style="width: 100%;" class="carousel-wrapper">
          <div class="owl-carousel owl-theme" id="luxury-carousel">
            @foreach($advance_products as $add_product)
            <div class="item news-home">
                <a href="{{route('product.detail', $add_product->alias)}}">
                <div style="" class="luxury-content row">
                     <img class="" style=" height: 560px; object-fit: cover;" src="assets/images/product/top-product-2.png">
                     <h3 class="luxury-head text-upper" >{{$add_product->description}}</h3>
                     <p class="luxury-text">{{$add_product->content}}</p>
                     <div class="luxury-detail" style="position: absolute; bottom: 20px; margin-left: 68%;">
                     <div style=" width:27%; height: 130px; background-color: rgba(212, 212, 212, 0.36); backdrop-filter: blur(31px);" class="row">
                     		<h4 class="luxury-title text-upper">{{$add_product->title}}</h4>
                     	 	<span class="luxury-model">{{$add_product->model}}</span>
                     	 	<span class="luxury-sale">{{$add_product->getPrice()}}</span>
                     	 	<span class="luxury-price">{{$add_product->getSalePrice()}}</span>
                     	</div>
                     </div>
                </div>
                </a>
            </div>
            @endforeach
            </div>
    	        <div style="position:   absolute;  bottom: 0; margin-bottom:  5px;
    	    left:20%;"  ><a style=" color:#000000; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right-black.svg"></a></div>
    	    </div>
   <!--  end news carousel -->
                </div>

            </div>
    		<div style="background: linear-gradient(90deg, #485563 0%, #29323C 100%);" class="col-md-12">
    			
    		</div>
    		<div  style="height: 1244px; 
            width: calc(100% - 400px); height: 1034px; margin-left: 165px; margin-top: 105px; background: linear-gradient(90deg, #8E9EAB 0%, #EEF2F3 100%); z-index: 2; position: absolute;" class="col-md-12">
    		
    		 </div>

    		
    	</div>
    </section>

    

     <section>
        <div style="height: 1380px; object-fit: cover; background-image:  url('assets/images/background/thuong-luu-bg.png');   background-position: center;" class="row">
            <div  class="best-seller-description">

            	<div class="best-seller-header best-seller-heading">
            	<!-- 	<div class="centered-text-top" style="color:white;">SỰ LỰA CHỌN CỦA GIỚI THƯỢNG LƯU</div> -->
            		<div class="centered-content-top">V DIAMOND mang đến cho Quý khách hàng những sản phẩm nội thất 
                     cổ điển mang hơi thở của thời gian</div>
                    <div class="centered-icon-top"><img src="assets/images/icons/top.png"></div>
                    <img src="assets/images/background/luxury.png">

            	</div>

            	<div  class="container container-best-seller product-best-seller">
	            <div class="col-md-9" style=" margin: auto; margin-top: 170px;">
    			
                    <div class="owl-carousel owl-theme" id="luxury-carou">
                        @foreach($luxury_products as $lux_product)
                        <div class="">
                          <img class="d-block w-100" src="assets/images/product/top-product.png" alt="First slide">
                          <h4 class="top-carousel-h4">{{$lux_product->title}}</h4>
                          <h5 class="top-carousel-h5">{{$lux_product->model}}</h5>
                          <p style="margin-bottom: 35px;" class="text-upper top-carousel-h5">GIÁ: {{$lux_product->getPrice()}}</p>
                        </div>
                        @endforeach
                    </div>
				</div>
                </div>
            </div>





    		


    		
    	</div>
    </section>
    

    <section>
    	<div style="margin-top: 68px;" class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<img style="width: 100%;" src="assets/images/banner/banner-doi-1.png">
    			</div>
    			<div class="col-md-6">
    				<img style="width: 100%;" src="assets/images/banner/banner-doi-2.png">
    			</div>
    		</div>
    	</div>
    </section>

     <section>
    	<div style="margin-top: 68px;" class="container">
    		<div class="row">
    			<div class="col-md-12 trend-heading">
    				XU HƯỚNG MUA SẮM
    			</div>
    			<div class="row">
    			<div class="col-md-2 btn btn-custom">
    				<div class="row">
    					<div class="col-md-4">
    						<img src="assets/images/icons/bed.svg">
    					</div>
    					<div class="col-md-8">
    						<div class="text-upper trend-text">Giường ngủ</div>
    						<div class="trend-number">Cao cấp</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-2 btn btn-custom col-half-offset">
    				<div class="row">
    					<div class="col-md-4">
    						<img src="assets/images/icons/bed.svg">
    					</div>
    					<div class="col-md-8">
    						<div class="text-upper trend-text">Sofa</div>
    						<div class="trend-number">Cao cấp</div>
    					</div>
    				</div>
    			</div>
    			<div class=" btn-custom btn col-md-2 col-half-offset">
    				<div class="row">
    					<div class="col-md-4">
    						<img src="assets/images/icons/bed.svg">
    					</div>
    					<div class="col-md-8">
    						<div class="text-upper trend-text">Bàn ăn</div>
    						<div class="trend-number">Hàn Quốc</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-2 btn btn-custom col-half-offset">
    				<div class="row">
    					<div class="col-md-4">
    						<img src="assets/images/icons/bed.svg">
    					</div>
    					<div class="col-md-8">
    						<div class="text-upper trend-text">Sofa</div>
    						<div class="trend-number">Hàn Quốc</div>
    					</div>
    				</div>
    			</div>
    			<div style="" class="btn btn-custom col-md-2 col-half-offset">
    				<div class="row">
    					<div class="col-md-4">
    						<img src="assets/images/icons/bed.svg">
    					</div>
    					<div class="col-md-8">
    						<div class="text-upper trend-text">Sofa</div>
    						<div class="trend-number">Khung thép</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		</div>
    	</div>

    </section>
    <style type="text/css">
        
         /*   .owl-carousel .prev-carousel:hover {
              background-position: 0px -53px;
            }

            .owl-carousel .next-carousel:hover {
              background-position: -24px -53px;
            }*/
    </style>
    <section>
    <div style="margin-top: 68px; height:  745px; background-color: #ececec;">
         <div class="trend-heading" style="padding-top: 60px;">Cẩm nang nội thất</div>
         <div class="camnang-text">Tư vấn, chia sẻ những thông tin hữu ích xoay quanh các vấn đề liên quan đến nội thất</div>
         <div style="text-align: center; margin-bottom: 28px;"><img  src="assets/frontend/images/icons/logo-cat.png"></div>
      <div class="carousel-wrapper" style="width: 1300px !important;">
          <div class="owl-carousel owl-theme" id="news-carousel">
            @foreach($news as $new)
            <div class="item news-home">
                <div style="background-color: white; margin-right: -10px; margin-left: -10px;" class="news-content row">
                    <img class="col-md-12" style="height: 275px; width: 100%; padding: 0px;  object-fit: cover;" src="assets/frontend/images/news/news-1.png">
                    <h4  style="float: left;" class="col-md-12">{{$new->title}}</h4>
                    <p class="col-md-12">{{$new->description}}</p>
                </div>
            </div>
            @endforeach
          </div>
        <div style="position:   absolute;  bottom: 0; margin-bottom:  5px;
    right:0;"  ><a style=" color:#000000; font-weight: 700; font-size: 15px;" href="#">XEM THÊM <img style="color:  black; margin-bottom:5px;width: 23px; height: 22px;" src="assets/images/icons/arrow-right-black.svg"></a></div>
    </div>

    	
  
    </section>
@stop

