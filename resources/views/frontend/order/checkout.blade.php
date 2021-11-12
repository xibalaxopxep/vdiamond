@extends('frontend.layouts.master')
@section('content') 
<style type="text/css">
    [data-toggle="buttons-radio"]>.btn>input[type="radio"] {
    display: none;
}

[data-toggle="buttons-checkbox"]>.btn>input[type="checkbox"] {
    display: none;
}

.button-radio-group input{
    width: 25px; 
    height: 25px; 
    margin-top: -1px;
    vertical-align: middle;
}

.button-radio-group .middle-radio{
    margin-top: -1px;
    vertical-align: middle;
}


input[type=radio]::-ms-check {
  border-color: red; /* This will make the border red when the button is checked. */
  color: red; /* This will make the circle red when the button is checked. */
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
    @if(Session::get('cart'))
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
                                    <h3 class="ec-checkout-title">Thông tin nhận hàng</h3>
                                    <div class="ec-bl-block-content">
                                        
                                        <div class="ec-check-bill-form">
                                            <form action="{{route('order.index')}}" method="post">
                                                @csrf
                                                <span style="width: 50%;" class="ec-bill-wrap ec-bill-half">
                                                    <input required="" type="text" name="name"
                                                        placeholder="Họ tên" required />
                                                </span>
                                                <span style="width: 50%;" class="ec-bill-wrap ec-bill-half">
                                                    <input required="" type="text" name="mobile"
                                                        placeholder="Số điện thoại" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <input required="" type="text" name="address" placeholder="Địa chỉ" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select required="" data-select="province" name="privince" id="ec-select-city"
                                                            class="ec-bill-select select-address">
                                                            <option selected disabled>Chọn tỉnh thành</option>
                                                            @foreach($province as $provin)
                                                            <option value="{{$provin->provinceid}}">{{$provin->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select required="" data-select="district"  name="district" id="ec-select-city select-district"
                                                            class="ec-bill-select select-address select-district">
                                                            <option selected disabled>Chọn Quận/Huyện</option>
                                                            
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <span class="ec-bl-select-inner">
                                                        <select  required="" name="ward" id="ec-select-country "
                                                            class="ec-bill-select select-ward">
                                                            <option selected disabled>Chọn Phường/Xã</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                
                                                 <span class="ec-bill-wrap">
                                                    <input type="text" name="note" placeholder="Ghi chú" />
                                                </span>
                                          
                                        </div>
                                        
                                        <div class="ec-check-subtitle">Chọn hình thức thanh toán</div>

                                         <div class="button-radio-group">
                                            <div style="height: auto; display: flex;" class="col-md-12 btn btn-payment pb-2">
                                                <div class="col-md-1 col-3 pt-3 middle-radio" style="">
                                                 <input checked="" value="1" type="radio" id="bill1" name="payment_method">
                                                <img class="" src="{{asset('assets/images/icons/cod.svg')}}">
                                                </div>
                                                <label style="" class="col-md-10 col-9 pt-3 pl-4">Thanh toán khi nhận hàng (COD)<br> Miễn phí vận chuyển với mọi đơn hàng trên</label>
                                            </div>
                                            <div class="col-md-12 btn btn-payment" style="height: auto; display: flex;">
                                                <div class="col-md-1 col-3 pt-3 middle-radio">
                                                    <input  value="2" style="" type="radio" id="bill1" name="payment_method">
                                                    <img class="" src="{{asset('assets/images/icons/atm.png')}}">
                                                 </div>
                                                <label class="col-md-10 col-9 pt-3 pl-4">Cổng thanh toán điện tử<br> Thẻ ATM / Internet Banking <br> Thẻ tín dụng</label>
                                            </div>
                                        </div>
                                           
                         
                                          
                                    </div>
                                </div>

                            </div>
                
                            <button class="btn btn-orange" type="submit" style=" width: 100%; height: auto;">
                                <a class="" >Đặt hàng</a>
                                <p style="text-transform: capitalize; margin-top: -10px;">Ship tới không mua không sao - mua rồi vẫn đổi trả miễn phí.</p>
                            </button>
                            </form>
                      
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
                                    @foreach(Session::get('cart') as $key => $product)
                                    <div class="col-sm-12 mb-6">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img style="height: 136px;" class="main-image"
                                                            src="{{url($product['image'])}}"
                                                            alt="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 style="text-align: left !important;" class="ec-pro-title"><a href="product-left-sidebar.html">{{$product['title']}}</a></h5>
                                                <div class="ec-pro-rating">
                                                    <span class="model">{{$product['title']}}</span>
                                                </div>
                                                <span class="ec-price">
                                                    <span style="color: #FA6400;" class="new-price">{{number_format($product['price'])}}đ</span>
                                                </span>
                                                <div style="margin-top: 15px;">
                                                    <div class="number-input">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" data-product_id="{{$key}}" class="down-quantity"></button>
                                                          <input class="quantity updateQuantity totalCart" min="0" name="quantity" value="{{$product['quantity']}}" type="number">
                                                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" data-product_id="{{$key}}" class="plus up-quantity"></button>
                                                        </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                <div class="input-group mb-3">
                              <input type="text" class="form-control couponCode" placeholder="Nhập mã giảm giá" >
                              <div class="input-group-append">
                                <button style="" type="button" class="input-group-text applyCoupon" id="basic-addon2">Áp dụng</button>
                              </div>
                            </div>
                                <div class="ec-checkout-summary order-3">
                                    <div>
                                        <span class="text-left">Tạm tính</span>
                                        <span class="text-right totalNow">{{number_format($total)}}đ</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Mã giảm giá</span>
                                        <span class="text-right totalDiscount">0đ</span>
                                    </div>
                                    
                                   
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Tổng tiền</span>
                                        <span class="text-right totalCart">{{number_format($total)}}đ</span>
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
    @else
     
    <section style="height: 35vh;" class="ec-under-maintenance">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="under-maintenance">
                        <h4>Không có sản phẩm nào trong giỏ hàng</h4>
                        
                        <a href="{{route('home.index')}}" class="btn btn-lg btn-primary" tabindex="0">Về trang chủ</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @endif
    @stop