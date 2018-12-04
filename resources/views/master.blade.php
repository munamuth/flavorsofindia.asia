<!DOCTYPE html>
<html>
<head>
	<title>Flavors of Indai Asia</title>
    <link rel="icon" type="text/css" href="{{ url('/public/node_modules/logo/icon.png') }}">
	<meta name="description" content="Resturant In Cambodia">
    <meta name="keywords" content="India Resturant in Cambodia, Resturant, India, Food, Resturant in Phnom Penh, Resturant in Siem Reap">
    <meta name="author" content="Nem Muth">
   <!--  <meta http-equiv="refresh" content="30"> -->
    <title>Flavors of India | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/public/node_modules/owl.carousel/dist/assets/owl.theme.default.css') }}" />
    <!-- Awesome font -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/font-awesome/css/font-awesome.min.css') }}">
    <!-- animate css-- -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/animate.css/animate.min.css') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i" rel="stylesheet">
    <!-- AOS Animate -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/aos/dist/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/flag-icon-css/css/flag-icon.min.css') }}">
    <style type="text/css">
        *{
            font-family: 'Lato', sans-serif;
            font-family: 'khmer os content', sans-serif;
            font-weight: 300;
        }
    	a{
    		text-decoration: none;
    		color: #ffffff;
    	}
        a:hover{
            color: Orange;
            text-decoration: none;
        }
    	.header{
    		width: 100%;
    		background: #fff200;
    		z-index: 100;
    		float: left;
			border-bottom: dotted 2px #fff;
    	}
    	.header_left{
            display: flex;
    		width: 30%;
    		padding-left: 5%;
    		float: left;
            line-height: 133.5px;
    	}
    	.logo{
            width: 100%;
    		float: left;
    	}
    	.menu_bar{
    		display: none;
    		line-height: 136.5px;
    		font-size: 40px;
    		color: Orange;
    		padding-right: 15px;
    		float: right;
    	}
    	.header_right{
    		width: 70%;
    		padding-right: 5%;
    		float: left;
    	}
    	ul.main_menu
    	{
    		list-style: none; 
    		padding: 0;     		
    		margin: 0;
    		line-height: 133.5px;
    		float: right;
    	}
    	ul.main_menu li
    	{
    		height: 100%;
    		float: left;
    	}
    	ul.main_menu li:not(:first-child)::before
    	{
    		content: '|';
            font-weight: 900;
    		color: #ff0;
    	}
    	ul.main_menu li a:hover
    	{
    		border-bottom: solid 2px Orange;
			color: orange;
    	}
    	ul.main_menu li a
    	{
    		padding:15px;
    		color: #0f6100;
    		text-decoration: none;
    		font-weight: 500;
    	}

    	.body{
    		width: 100%;
    		background: transparent;
    		float: left;

    	}
    	.footer{
    		background: #6c6d6d;
    		color: #fff;
    	}
   
    	.footer{
    		width: 100%;
    		float: left;
    	}
    	.footer_title{
    		font-weight: 900;
    		font-size: 20px;
    		border-bottom: solid 0.5px #fff;
    	}
    	.footer_bottom{
    		width: 100%;
    		text-align: center;
    		padding: 15px;
    		background: Orange;
    	}
    	.social_link a{
    		padding: 0 5px;
    		font-size: 24px;
    	}

    	@media screen and (max-width: 925px) {
    		.header_left,.header_right{
    			width: 100%;
    			padding-right: 0;
    		}
    		.menu_bar{
    			display: block;
    		}


    		ul.main_menu{
    			display: none;
    			width: 100%;
    			line-height: normal;
    			background: #a29e9e11;
    		}
    		ul.main_menu li a {

    		  float: left;
    		}
    		ul.main_menu li:not(:first-child)::before
	    	{
	    		float: left;
	    		line-height: 51px;
			}
    	}
    	@media screen and (max-width: 631px) {
    		ul.main_menu li:first-child{
    			border-top:solid 1px #fff; 
    		}
            ul.main_menu li a{
                  width: 100%;
            }
    		ul.main_menu li {
    			width: 100%;
    			border-bottom: solid 1px #fff;
    		}
    		ul.main_menu li:not(:first-child)::before
	    	{
	    		content: "";
			}
    	}



        .goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
    body {
    overflow-x: hidden;
    top: 0px !important; 
    }
    div.top{
       background:  #2c4a69;
       color: #fff;
    }

    ul.language_bar{
        padding: 5px;
        margin: 0;
        list-style:  none;
        float: right;
    }
    ul.language_bar li a{
        padding: 0 5px;
    }
    </style>
    @yield('head')
</head>
<body>
    <div class="top skiptranslate d-none">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <ul class="language_bar" style="float: left;">
                        <li><a href="tel:0">+855 23 123 123</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                    <ul class="language_bar">
                        <li>
                            <a href="#googtrans(en|en)" class="language"><span class="flag-icon flag-icon-gb"></span> English</a>
                            <a href="#googtrans(en|km)" class="language"><span class="flag-icon flag-icon-kh"></span> ភាសាខ្មែរ</span></a>
                            <a href="#googtrans(en|zh-CN)" class="language"><span class="flag-icon flag-icon-cn"></span> 中文</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
    </div>
    <div class="header">
        <div class="container-fluid">
    	<div class="header_left">
    		<div class="logo">
                <a href="{{ url('/') }}">
    			<img src="{{ url('/public/node_modules/logo/logo.png') }}" style="width: 90%" class="img-fluid">
                </a>
    		</div>
    		<div class="menu_bar">
    			<i class="fa fa-bars fa-times"></i>
    		</div>
    	</div>
    	<div class="header_right">
    		
    		<ul class="main_menu">
    			<li class=""><a href="{{ url('/') }}"><i class="fa fa-home" style="font-size: 25px;"></i> Home</a></li>
                <li class=""><a href="{{ url('#') }}"><i class="fa fa-info-circle1"></i> About Us</a></li>
    			<li class=""><a href="{{ url('#') }}"><i class="fa fa-bed1"></i> Special Offers</a></li>
    			<li class=""><a href="{{ url('#') }}"><i class="fa fa-image1"></i> Menu</a></li>
                <li class=""><a href="{{ url('#') }}"><i class="fa fa-address-book1"></i> Gallery</a></li>
    			<li class=""><a href="{{ url('#') }}"><i class="fa fa-address-book1"></i> Branches</a></li>
    		</ul>
    	</div>
    		
    </div>
</div>
<div class="body">
	@yield('slide')
	@yield('body')
</div>
<div class="footer">
	<div class="container">
		<div class="row card-body">
			<!-- <div class="col-12 col-sm-6 order-sm-1   col-md-4">
				<div class="footer_title text-warning skiptranslate">Flavor Of India</div>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-map"></i> 
                        Ground Floor, Suntown Plaza, Cnr Russian Blvd & Northbridge Rd, Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh, Cambodia.
                    </a></li>

                     <li class="nav-item"><a href="tel: +855 855 855 855" class="nav-link"><i class="fa fa-phone"></i> +855 855 855 855</a></li>
                     <li class="nav-item"><a href="tel: +855 855 855 855" class="nav-link"><i class="fa fa-fax"></i> +855 855 855 855</a></li>
                     <li class="nav-item"><a href="meailto: Email@websitename.com" class="nav-link"><i class="fa fa-envelope"></i> Email@websitename.com</a></li>
                </ul>
			</div> -->
			<div class="col-12 col-sm-12 order-12 order-sm-2  col-md-3">
				<div class="footer_title text-warning">Pages</div>
				<ul style="list-style: none;" class="nav flex-column">
					<li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-link1"></i> Home</a></li>
					<li class="nav-item"><a href="{{ url('#') }}" class="nav-link"><i class="fa fa-link1"></i> About Us</a></li>
					<li><a href="{{ url('#') }}" class="nav-link"><i class="fa fa-link1"></i> Special Offers</a></li>
                    <li><a href="{{ url('#') }}" class="nav-link"><i class="fa fa-link1"></i> Menu</a></li>
                    <li><a href="{{ url('#') }}" class="nav-link"><i class="fa fa-link1"></i> Gallery</a></li>
					<li><a href="{{ url('#') }}" class="nav-link"><i class="fa fa-link1"></i> Branches</a></li>
				</ul>
			</div>
			<div class="col-12 col-sm- order-2  order-sm-3 col-md-6">
				<div class="footer_title text-warning">Flavors Of India (Cambodia)</div>
                <div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-sm-4 font-weight-bold">@ Phnom Penh :</div>
							<div class="col-12 col-sm-8">#158, St 63, Phnom Penh<br>023 990 455, 012 886 374</div>
						</div>
						<br>
						<div class="row">
							<div class="col-12 col-sm-4 font-weight-bold">@ Battambang :</div>
							<div class="col-12 col-sm-8">#301-302, St 121, Svay Por Commune, Battambang
								<br>
									053 731 553</div>
						</div>
						<br>
						<div class="row">
							<div class="col-12 col-sm-4 font-weight-bold">@ Siem Reap :</div>
							<div class="col-12 col-sm-8">#255, St Soksan, Steong Thmey Village, Svay Dangkhum, Siem Reap
								<br>
									063 765 900
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 order-1  order-sm-3 col-md-3">
				<div class="footer_title text-warning">Follow Us</div>
				<div class="social" style="padding-left: 15px;">
					<div style="width: 80%; margin: auto;">
						<a href="#"><img src="{{ url('/public/node_modules/logo/tripadvisor.png') }}" class="img-fluid"></a>
					</div>
					<div class="social_link text-center" style="margin: auto;">
						<a href="https://www.fb.com/"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter-square"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="weixin://dl/chat?laiping133"><i class="fa fa-wechat"></i></a>
						<a href="#"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		Flavors Of India Asia &copy{{ Date('Y')}}
        
	</div>
    
</div>

    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



    <!-- <script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> -->










 	<link rel="stylesheet" src="{{ url('/public/node_modules/jquery-ui/themes/base/theme.css') }}">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url('/public/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/public/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/public/node_modules/aos/dist/aos.js') }}"></script>
    @yield('script')
    <script type="text/javascript">
    	$('.menu_bar').click( function() {
    		$(this).find('.fa').toggleClass('fa-bars')
    		$('.main_menu').slideToggle();
    	});
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            loop: true,
            items: 1,
            autoplay:true,
          });
        });
    </script>
    <script type="text/javascript">
        AOS.init();
    </script>
    <script type="text/javascript">
        $('.language').click( function(){
            location.reload()
            $('.skiptranslate').addClass('d-none');
            $('.skiptranslate').prop('display', 'none');
            $('.goog-close-link').trigger('click')
        })

    </script>
</html>