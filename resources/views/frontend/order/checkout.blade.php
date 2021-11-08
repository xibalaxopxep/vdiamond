@extends('frontend.layouts.master')
@section('content') 
<style type="text/css">
    [data-toggle="buttons-radio"]>.btn>input[type="radio"] {
    display: none;
}

[data-toggle="buttons-checkbox"]>.btn>input[type="checkbox"] {
    display: none;
}
</style>


    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-checkout-leftside col-lg-7 col-md-12 order-md-1 order-2">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                            
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Billing Details</h3>
                                    <div class="ec-bl-block-content">
                                        
                                        <div class="ec-check-bill-form">
                                            <form action="#" method="post">
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <input type="text" name="firstname"
                                                        placeholder="Họ tên" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <input type="text" name="lastname"
                                                        placeholder="Số điện thoại" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <input type="text" name="address" placeholder="Địa chi" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_city" id="ec-select-city"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Chọn tỉnh thành</option>
                                                            <option value="1">City 1</option>
                                                            <option value="2">City 2</option>
                                                            <option value="3">City 3</option>
                                                            <option value="4">City 4</option>
                                                            <option value="5">City 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_city" id="ec-select-city"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Chọn Quận/Huyện</option>
                                                            <option value="1">City 1</option>
                                                            <option value="2">City 2</option>
                                                            <option value="3">City 3</option>
                                                            <option value="4">City 4</option>
                                                            <option value="5">City 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_country" id="ec-select-country"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Chọn Phường/Xã</option>
                                                            <option value="1">Country 1</option>
                                                            <option value="2">Country 2</option>
                                                            <option value="3">Country 3</option>
                                                            <option value="4">Country 4</option>
                                                            <option value="5">Country 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                 <span class="ec-bill-wrap">
                                                    <input type="text" name="address" placeholder="Ghi chú" />
                                                </span>
                                            </form>
                                        </div>
                                        
                                        <div class="ec-check-subtitle">Chọn hình thức thanh toán</div>

                                        <div class="payment-method" style="justify-content: left;">
                                            <div style="height: auto; display: flex;" class="col-md-12 btn btn-payment">
                                                <div class="col-md-1">
                                                 <input style="width: 15px; height: 15px;" type="radio" id="bill1" name="radio-group">
                                                <img class="" src="{{asset('assets/images/icons/cod.svg')}}">
                                                 </div>
                                                  <label style="" class="col-md-10">Thanh toán khi nhận hàng (COD)<br> Miễn phí vận chuyển với mọi đơn hàng trên</label>
                                            </div>
                                            <div class="col-md-12 btn btn-payment">
                                                <input style="width: 15px; height: 15px;" type="radio" id="bill1" name="radio-group">
                                                <img src="{{asset('assets/images/icons/atm.png')}}">
                                                <label for="bill1">I want to use an existing address</label>
                                            </div>
                                            <div class="col-md-12 btn btn-payment">
                                                <input style="width: 15px; height: 15px;" type="radio" id="bill1" name="radio-group">
                                                 <img src="{{asset('assets/images/icons/atm.png')}}">
                                                <label for="bill1">I want to use an existing address</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <span class="btn btn-orange" style="justify-content: center; width: 100%; height: auto;">
                                <a href="#">Mua ngay</a>
                                <p>Ship tới không mua không sao - mua rồi vẫn đổi trả miễn phí.</p>
                            </span>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-checkout-rightside col-lg-5 col-md-12 order-md-2 order-1">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                             <!--    <h3 class="ec-sidebar-title">Summary</h3> -->
                                
                             <span class="ec-checkout-title">Giỏ hàng của bạn</span>
                            </div>
                            <div class="ec-sb-block-content">
                                
                                <div class="ec-checkout-pro">
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="assets/images/product-image/1_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="assets/images/product-image/1_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span class="model">Model: MD123</span>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$95.00</span>
                                                    <span style="color: #FA6400;" class="new-price">$79.00</span>
                                                </span>
                                                <div style="margin-top: 15px;">
                                                    <div class="number-input">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                          <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                        </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="assets/images/product-image/1_1.jpg"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span class="model">Model: MD123</span>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$95.00</span>
                                                    <span style="color: #FA6400;" class="new-price">$79.00</span>
                                                </span>
                                                <div style="margin-top: 15px;">
                                                    <div class="number-input">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                          <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                        </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <span style="" class="input-group-text" id="basic-addon2">Áp dụng</span>
                              </div>
                            </div>
                                <div class="ec-checkout-summary order-3">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Coupan Discount</span>
                                        <span class="text-right"><a class="ec-checkout-coupan">Apply Coupan</a></span>
                                    </div>
                                    <div class="ec-checkout-coupan-content">
                                        <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form"
                                            method="post" action="#">
                                            <input class="ec-coupan" type="text" required=""
                                                placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                            <button class="ec-coupan-btn button btn-primary" type="submit"
                                                name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </section>
    @stop