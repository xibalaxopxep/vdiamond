
<body>
   

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div style="background-color: #F5F5F5;" class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div style="float: left;" class="col header-top-left d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex ">
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown">
                                <button class="dropdown-toggle " data-bs-toggle="dropdown">Hệ thống showroom <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">Số 4 Hồ Sen</a></li>
                                    <li><a class="dropdown-item" href="#">EAON Mall Hải Phòng</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->
                        </div>
                    </div>
                    <!-- <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- Header Top social End -->
                  
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div style="margin-right: 10px;" class="header-top-curr dropdown">
                               Kết nối
                            </div>
                            <!-- Currency End -->
                            <div class="header-top-social">
                            
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><img src="{{asset('assets/images/icons/facebook-header.png')}}"></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><img src="{{asset('assets/images/icons/youtube.png')}}"></a></li>
                                <!-- <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li> -->
                            </ul>
                        </div>

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header Cart Start -->
                           <!--  ec-side-cart-href -->
                            <a href="{{route('checkout.index')}}" id="" class="ec-header-btn ec-side-toggle">
                  
                                <div class="header-icon"><img src="{{asset('assets/images/icons/cart.svg')}}"
                                        class="svg_img header_svg" alt="" /></div>
                                        @if(Session::get('quantityCart'))
                                <span class="ec-header-count cart-count-lable quantityCart">{{Session::get('quantityCart')}}</span>
                                @else
                                 <span class="ec-header-count cart-count-lable quantityCart">0</span>
                                @endif
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a  id="" class="ec-mobile-menu-href ec-header-btn ec-side-toggle d-lg-none">
                                <img src="{{asset('assets/images/icons/menu.svg')}}" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="col-md-2">
                            <div class="header-search">
                                <form method="get" class="ec-btn-group-form" action="{{route('product.search')}}">
                                    <button class="submit" type="submit"><img src="{{asset('assets/images/icons/search.svg')}}"
                                            class="svg_img header_svg" alt="" /></button>
                                    <input name="keyword" style="border-radius: 20px; " class="form-control" placeholder="Tìm kiếm" type="text">
                                    
                                </form>
                            </div>
                            
                        </div>
                        <div class="col-md-1"></div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="col-md-6" >
                            <div style="text-align: center;" class="header-logo">
                                <a href="{{route('home.index')}}"><img  src="{{asset('assets/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="col-md-3">
                            <div class="ec-header-bottons">
                                <a href="{{route('checkout.index')}}" class=" ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="{{asset('assets/images/icons/cart.svg')}}"
                                            class="svg_img header_svg" alt="" /></div>
                                    @if(Session::get('quantityCart'))
                                    <span class="ec-header-count cart-count-lable quantityCart">{{Session::get('quantityCart')}}</span>
                                    @else
                                    <span class="quantityCart ec-header-count cart-count-lable">0</span>
                                    @endif
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a style="height: 146px;" href="{{route('home.index')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Site Logo" /><img
                                    class="dark-logo" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" method="get" action="{{route('product.search')}}">
                                <input class="form-control" name="keyword" placeholder="Bàn tìm gì..." type="text">
                                <button class="submit" type="submit"><img src="{{asset('assets/images/icons/search.svg')}}"
                                        class="svg_img header_svg" alt="icon" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" style="background-color: #000000; " class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                              
                                <li style="background-color: #BE7B51; width: 55px; margin-left: 0px;"><a style="text-align: center;" href="{{route('home.index')}}"><img  src="{{asset('assets/images/icons/vhome.svg')}}"></a></li>
                                @foreach($menu as $mn)
                                  @if(count($mn->children)>0)
                                  <li class="dropdown"><a href="#">{{$mn->title}}</a>
                                     <ul class="sub-menu">
                                        @foreach($mn->children as $chil)
                                        <li><a href="{{url($chil->link)}}">{{$chil->title}}</a></li>
                                        @endforeach
                                    </ul>
                                  </li>
                                  @else
                                  <li class=""><a href="{{url($mn->link)}}">{{$mn->title}}</a></li>
                                  @endif
                                   
                                @endforeach
                                <!-- <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                                <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product video
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                gallery
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.html">Product full width</a></li>
                                        <li><a href="product-360-full-width.html">360 full width</a></li>
                                        <li><a href="product-video-full-width.html">Video full width</a></li>
                                        <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="offer.html">Hot Offers</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title"></span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="{{route('home.index')}}">Trang chủ</a></li>
                         @foreach($menu as $mn)
                                  @if(count($mn->children)>0)
                                  <li class="dropdown"><a href="{{url($mn->link)}}">{{$mn->title}}</a>
                                     <ul class="sub-menu">
                                        @foreach($mn->children as $chil)
                                        <li><a href="{{url($chil->link)}}">{{$chil->title}}</a></li>
                                        @endforeach
                                    </ul>
                                  </li>
                                  @else
                                  <li class=""><a href="{{url($mn->link)}}">{{$mn->title}}</a></li>
                                  @endif
                                   
                                @endforeach
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <!-- <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div> -->
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <!-- <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div> -->
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item pl-2 pr-2"><a class="hdr-facebook" href="#"><img src="{{asset('assets/images/icons/hotline-menu.svg')}}"></a></li>
                                <li class="list-inline-item pl-2 pr-2"><a class="hdr-twitter" href="#"><img src="{{asset('assets/images/icons/facebook-menu.svg')}}"></a></li>
                                <li class="list-inline-item pl-2 pr-2"><a class="hdr-instagram" href="#"><img src="{{asset('assets/images/icons/zalo-menu.png')}}"></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>

          <!-- ekka Cart Start -->
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">Giỏ hàng</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
      
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">title</a>
                            <span class="cart-price"><span>Gía</span></span>
                            <div class="qty-plus-minus">
                                <input class="qty-input updateCart" type="text" name="ec_qtybtn" value="1" />
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
        
        <!-- ekka mobile Menu End -->
    </header>