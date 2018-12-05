@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
    $banner = DB::table('slider')->where('com','home')->get();
?>
<div class="indexx">
	<div class="logo_home">
		<a href="{{url('')}}" title="">
			<img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
		</a>
	</div>
	<div class="leftx vk-banner-item">
		<img src="{{asset('upload/hinhanh/'.@$banner[0]->photo)}}">
		<div class="text_left_home"><a href="{{url('tu-van-thiet-ke')}}" title="">Tư vấn thiết kế</a></div>
	</div>
	<div class="rightx">
		<img src="{{asset('upload/hinhanh/'.@$banner[1]->photo)}}">
		<div class="text_right_home"><a href="{{url('san-pham')}}" title="">Sản phẩm bán lẻ</a></div>
	</div>
</div>

@endsection
