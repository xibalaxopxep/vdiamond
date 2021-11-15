@extends('frontend.layouts.master')
@section('content') 
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/tin-tuc.css')}}" />

<style type="text/css">
	@media only screen and (min-width: 767px) {
        .news-top{
        	background-image:url('assets/images/background/bg.png');
        }
    }

    .news-top{
        	background-image:url('assets/images/background/bg-desk.png');
        	height: 110%;
        }

</style>

<section style="  " class="news-top">
	<div class="wrap">
		<h1>TIN TỨC NỔI BẬT</h1>
		<ul id="news-top" class="pin owl-carousel owl-theme">

			@foreach($records as $record)
				<li>
					<img class="owl-lazy" data-src="{{asset($record->getImage())}}" alt="New" />
					<h2><a href="">{{$record->title}}</a></h2>
					<p class="intro">{{$record->description}}</p>
					<p class="time">Thời gian: {{$record->created_at}}</p>
				</li>
			@endforeach
		</ul>

		<ul class="hot news-blog">
			@foreach($hot_news as $hot_new)
				<li>
					<div class="left">
						<img class="lazy" src="{{asset($hot_new->getImage())}}" alt="New" />
					</div>
					<div class="right">
						<h3><a href="">{{$hot_new->title}}</a></h3>
						<p class="intro">{{$hot_new->description}}</p>
						<p class="time">Thời gian: {{$hot_new->created_at}}</p>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
</section>

<section class="news-bot">
	<h2>Tin tức mới</h2>
	<ul class="news-blog">
		@foreach($new_news as $new_new)
			<li>
				<div class="left">
					<img class="lazy" src="{{asset($new_new->getImage())}}" alt="New" />
				</div>
				<div class="right">
					<h3><a href="">{{$new_new->title}}</a></h3>
					<p class="intro">{{$new_new->description}}</p>
					<p class="time">Thời gian: {{$new_new->created_at}}</p>
				</div>
			</li>
		@endforeach
	</ul>
	<div class="more">Xem thêm</div>
</section>

@stop