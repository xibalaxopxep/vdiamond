@extends('frontend.layouts.master')
@section('content')
   <style type="text/css">
   	.iframe-maps {
    width: auto;
}
   </style>
  <div class="contact-v" style="">
  	  <div class="container" style="max-width: 1100px !important;">
  	  	<div class="row " style="justify-content: center;">
	  	  	<div class="col-md-5 col-12 row ">
	  	  		<div class="order-2 order-md-1 col-md-12 col-12 list-content">
	  	  		<h2>{{$share_config->company_name}}</h2>
	  	  		<div class="content"><img src="{{asset('assets/images/icons/marker.svg')}}"> Địa chỉ: {{$share_config->address}}</div>
	  	  		<div class="content"><img src="{{asset('assets/images/icons/hotline2.svg')}}"> Hotline: {{$share_config->hotline}}</div>
	  	  		<div class="content"><img src="{{asset('assets/images/icons/gmail.svg')}}"> Email: {{$share_config->email}}</div>
	  	  		<div class="content"><img src="{{asset('assets/images/icons/fb.svg')}}"> Fanpage: {{$share_config->facebook}}</div>
	  	  		</div>
	  	  		<iframe class="col-md-12 order-md-2 col-12 order-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7982216976347!2d105.82604831534698!3d21.000723986013554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac879d244983%3A0xe00d24f95b80aa1f!2zMTIgTMOqIFRy4buNbmcgVOG6pW4sIEtoxrDGoW5nIE1haSwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1636170841133!5m2!1svi!2s" width="100%" height="185px" style="border:0; border-radius: 20px; margin-top: 15px;" allowfullscreen="" loading="lazy"></iframe>
	  	  	</div>
	  	  	<div class="col-md-2 col-0">
	  	  	</div>
	  	  	
	  	  	<div class="col-md-5 col-12 contact">
	  	  		<form action="{{route('sendContact')}}" method="post">
	  	  			@csrf
	  	  		<input required="" type="text" class="form-control mb-4" name="name" placeholder="Họ tên">
	  	  		<input required="" type="text" class="form-control mb-4" name="mobile" placeholder="Số điện thoại">
	  	  		<textarea required="" rows="6" type="text" class="form-control mb-4" name="content" placeholder="Nội dung"></textarea>
	  	  		<button class="btn text-upper" style="">Gửi liên hệ</button>
	  	  		 	</form>
	  	  	</div>
	  	 
  	    </div>
  	  </div>
  	
  </div>
@stop