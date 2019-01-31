@extends('admin')

@section('body')
	<style type="text/css">
		.box{
			width: 24%;
			height: 100px;
			line-height: 100px;
			float: left;
			background: #890;
			text-align: center;
			vertical-align: middle;
			margin: 0.1%;
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
			<a href="{{ route('about_us.index') }}">About</a>
		</div>
		<div class="box">
			<a href="{{ route('menu.index') }}">Menu</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/special') }}">Special</a>
		</div>
		<div class="box">
			<a href="{{ route('branch.index') }}">Branches</a>
		</div>
		<div class="box">
			<a href="{{ route('history.index') }}">History</a>
		</div>
		<div class="box">
			<a href="{{ route('review.index') }}">Reviews</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/gallery') }}">Gallery</a>
		</div>
		<div class="box">
			<a href="{{ url('/admin/users') }}">Users</a>
		</div>
	</div>

@endsection
@section('script')
<script type="text/javascript">
	box = $('.box');
	box.each( function(ind){
		color =  Math.floor(Math.random() * (999999 - 0)) + 0;
		$(this).css({"background-color":"#"+color});
	});
</script>
@endsection