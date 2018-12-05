@extends('index')
@section('content')
<div class="box-video" style="background: url('{{asset('public/images/banner_video.jpg')}}');">
	<div class="video_content">
		<div class="middle">
			<h3>Tại sao chọn chúng tôi</h3>
			<div class="video-button" data-fancybox="video" href="https://www.youtube.com/embed/I6G1KgTtmFc">
				<img src="{{asset('public/images/videoplayer.png')}}">
			</div>
		</div>
	</div>
</div>
<div class="box-content1">
	<div class="box1-left rolex-home">
		<a href="" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Thiết kế</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="box1-right rolex-home">
		<a href="" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Dịch vụ</h3>
				</div>
			</div>
		</a>
	</div>
</div>

<div class="box-content1">
	<div class="box1-left rolex-home">
		<a href="" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Chúng tôi</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="box1-right rolex-home">
		<a href="" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Ý tưởng</h3>
				</div>
			</div>
		</a>
	</div>
</div>
@endsection