@extends('frontend.layouts.master')
@section('content')

 

    <!-- Start Privacy & Policy page -->
    <section class="ec-page-content section-space-p order-v" style="background-color: #f8f8f8;">
        <div class="container" style="max-width: 500px !important; background-color: white; border-radius: 10px;">
            <div class="row">
                <div class="col-md-12 mt-3 text-center">
                    <div class="section-title">
                        <h2 class="text-upper col-md-12 col-12 title">đặt hàng thành công</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="ec-common-wrapper mb-3">
                        <div class="col-sm-12 ec-cms-block">
                            <div class="ec-cms-block-inner">
                                <p style="text-align: center;">Cảm ơn anh Nguyễn Hoàng đã cho V Diamond cơ hội được phục vụ Nhân viên V Diamond sẽ gọi điện xác nhận giao hàng cho anh.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="mb-2">	
                <div style="border: 1px solid #FA6400; border-radius: 5px;" class="col-md-12">
                	<div class="row p-2">
                		<div class="row">
                			<span class="col-md-4 col-6 order-type">Đơn hàng:</span>
                			<span class="col-md-8 col-6 order-detail">#123456</span>
                		</div>
                		<div class="row">
                			<span class="col-md-4 col-6 order-type">Người nhận:</span>
                			<span class="col-md-8 col-6 order-detail">anh Hoàng</span>
                		</div>
                		<div class="row">
                			<span class="col-md-4 col-6 order-type">Số điện thoại:</span>
                			<span class="col-md-8 col-6 order-detail">0123456789</span>
                		</div>
                		<div class="row">
                			<span class="col-md-4 col-6 order-type">Tổng tiền:</span>
                			<span  class="col-md-8 col-6 order-detail total-order">17.000.000đ</span>
                		</div>
                	</div>
                </div>
                </div>
                <div class="mb-5" style="text-align: center;">	
                   <button style="" class="btn button-orange">Huỷ đơn hàng</button>
                </div>

                <div class="take_order text-upper">Thời gian nhận hàng</div>
                <div class="order-content">
                	 <div class="text mb-3" id="order-before">Giao trước 12h00 ngày 18/08/2020</div>
                	 <div class="row">
                	 	<div class="col-md-3 col-3"><img style="width: 100%;" src="{{asset('assets/images/order/order1.png')}}"></div>
                	 	<div class="col-md-9 col-9">
                	 		<h3>Combo sofa Hàn Quốc sang trọng</h3>
                	 		<p class="mb-0 text" id="model">Model: MD123</p>
                	 		<div class="row">
                	 			<div  class="col-md-6 col-6 quantity text">
                	 				Số lượng: 01
                	 			</div>
                	 			<div class="col-md-6 col-6">
                	 				<span class="text">Tổng tiền: </span><span class="total-order" >1.000.000đ</span>
                	 			</div>
                	 		</div>
                	 	</div>	
                	 </div>
                </div>
                <div class="mt-3 mb-3 pl-2 pr-2">	
                <button  style="border: 1px solid #FA6400; background: #F8F8F8; border-radius: 5px; height: 35px; text-align: center; line-height: 20px; color: #FA6400;  width: 100%; font-family: Open Sans;" class="btn">Xem thêm các sản phẩm khác</button>
                </div>
            </div>
        </div>
    </section>

@stop