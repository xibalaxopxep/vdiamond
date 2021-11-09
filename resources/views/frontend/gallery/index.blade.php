@extends('frontend.layouts.master')
@section('content') 
 <style type="">
 	.see-image{
 		position:relative; top:-50%;
 		font-family: Open Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 14px;
		line-height: 35px;
		/* identical to box height, or 250% */
		text-align: center;
		color: #FFFFFF;
 	}
 	.imgacity{
       width: 100%;	   
       border-radius: 5px;
 	}

 	.galerry-h2{
 		font-family: Open Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		line-height: 35px;
		/* or 117% */

		text-align: center;

		color: #000000;
 	}
 </style>
<div style="background: white; height: 	auto	;"	>	
	<div class="" style="height: auto; background-image: url('assets/images/background/galerry.png'); background-repeat: 	no-repeat;">
		<div class="text-center" style="justify-content: center;">
			<img class="" style="width: 150px; height: 150px; margin-top:50px; margin-bottom: 25px;"	src="{{asset('assets/images/background/galerry-avatar.png')}}">

			<h2 class="galerry-h2 text-upper" style="margin-bottom: 45px;">khách hàng vdiamond</h2>
		</div>
		<div class="container">
			<div class="row pl-0 pr-0">
				<div class="col-md-3 col-6">
                    <div class="fotorama" >	
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
					</div>
					
					<div style="" class="see-image" >

						<img src="{{asset('assets/images/icons/galerry.svg')}}">
						<span style="color:"> xem ảnh</span>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<img class="img" src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
				<div class="col-md-3 col-6">
					<img src="{{asset('assets/images/galerry/gl1.png')}}">
				</div>
			</div>
		</div>

	</div>
</div>

@stop
