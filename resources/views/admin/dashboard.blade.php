@extends('admin')

@section('body')
	<style type="text/css">
		.box{
			width: 31%;
			height: 150px;
			line-height: 150px;
			float: left;
			background: #890;
			text-align: center;
			vertical-align: middle;
			margin: 1.16%;
			border-radius: 5px;
		}
		div.box a{
			width: 100%;
			height: 100%;
			float: left;
			text-decoration: none;
			color: #fff;
			font-weight: 500;
		}
	</style>
	<div class="container">
		<div class="box">
			<a href="{{ url('/admin/slider') }}">Slider</a>
		</div>
		<div class="box">
			<a href="{{ route('room_type.index') }}">Room Types</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/about_Us') }}">About US</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/contact_us') }}">Contact Us</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/gallery') }}">Gallery</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/facility') }}">Facilities</a>
		</div>
	</div>

@endsection
@section('script')
<script type="text/javascript">
	box = $('.box');
	box.each( function(ind){
		color =  Math.floor(Math.random() * (999 - 0)) + 0;
		$(this).css({"background-color":"#"+color+'12'});
	});
</script>
@endsection