<!DOCTYPE html>
<html>
<head>
	<title>Flavors of India | Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/font-awesome/css/font-awesome.min.css') }}">

	<style type="text/css">
		html, body{
			height: 100%;
			background: #f8f8f9;
		}
		.header, .body{
			position: relative;
			display: flex;			
			border-bottom: inset 1px #7d7a7a;

		}
		.header-left{
			width: 20%;
			background: #123456;
			padding: 15px;
			border-right: inset 1px #7d7a7a;
		}
		.header-right{
			position: relative;
			width: 80%;
			background: #234567;
			padding: 15px;
		}
		.body{
			height: 100%;
		}
		.body-left{
			width: 20%;
			height: 100%;
			background: #123456;
			border-right: inset 1px #7d7a7a;
		}
		.body-right{
			width: 80%;
			padding: 10px;
		}
		ul.menu{
			list-style: none;
			padding: 0;
		}
		ul.menu li {
			width: 100%;
			float: left;
			border-bottom: inset 1px #7d7a7a;
		}
		ul.menu li a{
			width: 100%;
			height: 100%;
			padding: 10px;
			float: left;
			text-decoration: none;
			color: #eef;
		}
	</style>
	@yield('head')
</head>
<body>
	<div class="header">
		<div class="header-left">left</div>
		<div class="header-right">
			<div class="menu-bars float-left">
				<a href="#" class="fa fa-bars text-light"></a>
			</div>
			<div class="user text-right float-right d-flex">
				<div class="usericon px-2 mr-2 rounded-circle border"><i class="fa fa-user"></i></div>
				<div class="username text-light">Nem Muth</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="body-left">
			<ul class="menu">
				<li><a href="/admin">Dashboard</a></li>
				<li><a href="{{ url('/admin/slider') }}">Slider</a></li>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Dashboard</a></li>
			</ul>
		</div>
		<div class="body-right">
			@yield('body')
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="{{ url('/public/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/public/node_modules/tinymce/tinymce.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready( function(){
			$('.menu-bars').click( function(){
				$('.body-left').toggle();
			})
		});
	</script>
	@yield('script');
</body>
</html>