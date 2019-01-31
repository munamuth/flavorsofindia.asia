<!DOCTYPE html>
<html>
<head>
	<title>Flavors of India | Admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/summernote/dist/summernote-lite.css') }}">
	<style type="text/css">
		html, body{
			height: 100%;
			background: #f8f8f9;
			overflow-x: hidden;
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
			min-height: 100vh;
		}
		.body-left{
			width: 20%;
			min-height: 100%;
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
		<div class="header-left"><h4 class="text-light">{{ Auth::user()->name }}</h4></div>
		<div class="header-right">
			<!-- <div class="menu-bars float-left">
				<a href="#" class="fa fa-bars text-light"></a>
			</div> -->
			<div class="user text-right float-right d-flex​​​">
				<div class="username text-light">
					<a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
				</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="body-left">
			<ul class="menu">
				<li><a href="{{ url('/admin')}}">Dashboard</a></li>
				<li><a href="{{ route('slider.index') }}">Slider</a></li>
				<li><a href="{{ route('home_description.index') }}">Home Description</a></li>
				<li><a href="{{ route('about_us.index') }}">About</a></li>
				<li><a href="{{ route('menu.index') }}">Menu</a></li>
				<li><a href="{{ route('special.index') }}">Spacial</a></li>
				<li><a href="{{ route('branch.index') }}">Branches</a></li>
				<li><a href="{{ route('history.index') }}">History</a></li>
				<li><a href="{{ route('review.index') }}">Reviews</a></li>
				<li><a href="{{ route('gallery.index') }}">Gallery</a></li>
				<li><a href="{{ route('users.index') }}">User</a></li>
			</ul>
		</div>
		<div class="body-right">
			<div class="container">
				<div class="row">
					<div class="col">
						@if( Session::has('status') )
						<div class="form-group">
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  <strong>{{ session('status') }}</strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						</div>
						@endif
					</div>
			</div>
			</div>
			
			
			@yield('body')
			
		</div>
	</div>

	<script type="text/javascript" src="{{ url('/public/node_modules/popper.js/dist/popper.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="{{ url('/public/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/public/node_modules/summernote/dist/summernote-lite.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ url('/public/node_modules/tinymce/tinymce.min.js') }}"></script> -->
	<script type="text/javascript">
		$(document).ready( function(){
			$('.menu-bars').click( function(){
				$('.body-left').slideToggle()
			})
		});
	</script>
	<script>
      $('textarea').summernote({
        placeholder: 'What do you want to write here?',
        tabsize: 2,
        height: 400
      });
    </script>
	@yield('script')
</body>
</html>