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
    <link rel="stylesheet" href="{{ url('/public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }} " />
    <link rel="stylesheet" href="{{ url('/public/node_modules/owl.carousel/dist/assets/owl.theme.default.css') }}" />
    <!-- Awesome font -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/font-awesome/css/font-awesome.min.css') }}">
    <!-- animate css-- -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/animate.css/animate.min.css') }}">
    
    <!-- AOS Animate -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/aos/dist/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/public/node_modules/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style type="text/css">
        *{
           /* font-family: 'Lato';*/
           
        }
    	a{
    		text-decoration: none;
    	}
        a:hover{
            color: Orange;
            text-decoration: none;
        }
    	
    	
    	.logo{
            width: 100%;
    		float: left;
    	}
    	.menu_bar{
    		display: none;
    		color: Orange;
    		padding-right: 15px;
    		float: right;
    	}
        .social_link_header{
                padding-bottom: 55px;
            }
    	ul.main_menu
    	{
            bottom: 20px;
            width: 100%;
            float: left;
    		list-style: none; 
    		padding: 0;     		
    		margin: 0;
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
    		font-weight: 900;
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
    		padding: 10px;
    		background: #61615e;
    	}
    	.social_link a{
    		padding: 0 5px;
    		font-size: 24px;
    	}

    	@media screen and (max-width: 996px) {
			.con{
				padding-left:0;
				padding-right:0;
			}
    		.header_left,.header_right{
    			width: 100%;
    			padding-right: 0;
                z-index: 100;
                background: #fff;
    		}
    		.menu_bar{
    			display: block;
    		}
            .social_link_header{
                padding-bottom: 0;
            }

    		ul.main_menu{
    			display: none;
    			width: 100%;
    			line-height: normal;
    			background: transparent;
				border-top: dotted 2px #fff200;
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
			ul.main_menu{
				border: none;
			}
    		ul.main_menu li:first-child{
    			border-top:inset 1px #fff; 
    		}
            ul.main_menu li a{
                  width: 100%;
                  text-align: center;
            }
			ul.main_menu li a:hover
    	{
    		border-bottom: 0;
			color: orange;
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
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
   <div class="container-fluid">
       <div class="row">
        <div class="col-12 col-sm-4"></div>
           <div class="col-12 col-sm-4">
               <a href="{{ url('/') }}">
                  <img src="{{ url('/public/node_modules/logo/logo.png') }}" style="width: 90%" class="img-fluid">
                </a>
           </div>
           <div class="col-12 col-sm-3"></div>
           <div class="col-12 col-sm-1 d-none">
               <a href="https://www.tripadvisor.com/Restaurant_Review-g293940-d1597237-Reviews-Flavours_of_India-Phnom_Penh.html" target="_blank" class="text-secondary"><i class="fa fa-tripadvisor"></i></a>
                <a href="https://www.facebook.com/Flavors-of-India-404420972998824/" class="text-primary" target="_blank"><i class="fa fa-facebook-square"></i></a>
           </div>
       </div>
       
   </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="d-block d-sm-none">

        <a href="https://www.tripadvisor.com/Restaurant_Review-g293940-d1597237-Reviews-Flavours_of_India-Phnom_Penh.html" target="_blank" class="text-secondary h1"><i class="fa fa-tripadvisor"></i></a>
        &nbsp;
        <a href="https://www.facebook.com/Flavors-of-India-404420972998824/" class="text-primary h1" target="_blank"><i class="fa fa-facebook-square"></i></a>

    </div>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('about-us') }}"><i class="fa fa-info-circle1"></i> About Us</a></li>
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('/special-offer') }}"><i class="fa fa-bed1"></i> Our Special</a></li>
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('/menu') }}"><i class="fa fa-image1"></i> Menu</a></li>
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('/gallery') }}"><i class="fa fa-address-book1"></i> Gallery</a></li>
        <li class="nav-item text-center"><a class="nav-link font-weight-bold" href="{{ url('/branches') }}"><i class="fa fa-address-book1"></i> Our Branches</a></li>
    </ul>
    <div class="d-none d-sm-block">

        <a href="https://www.tripadvisor.com/Restaurant_Review-g293940-d1597237-Reviews-Flavours_of_India-Phnom_Penh.html" target="_blank" class="text-secondary h1"><i class="fa fa-tripadvisor"></i></a>
        &nbsp;
        <a href="https://www.facebook.com/Flavors-of-India-404420972998824/" class="text-primary h1" target="_blank"><i class="fa fa-facebook-square"></i></a>

    </div>
  </div>
  
</nav>

   
<div class="body">
	@yield('slide')
	@yield('body')
</div>
<div class="footer">
	<!-- <div class="container">
		<div class="row card-body">
			<div class="col-12 col-sm-6 order-sm-1   col-md-4">
				<div class="footer_title text-warning skiptranslate">Flavor Of India</div>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-map"></i> 
                        Ground Floor, Suntown Plaza, Cnr Russian Blvd & Northbridge Rd, Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh, Cambodia.
                    </a></li>

                     <li class="nav-item"><a href="tel: +855 855 855 855" class="nav-link"><i class="fa fa-phone"></i> +855 855 855 855</a></li>
                     <li class="nav-item"><a href="tel: +855 855 855 855" class="nav-link"><i class="fa fa-fax"></i> +855 855 855 855</a></li>
                     <li class="nav-item"><a href="meailto: Email@websitename.com" class="nav-link"><i class="fa fa-envelope"></i> Email@websitename.com</a></li>
                </ul>
			</div>
			<div class="col-12 col-sm-12 order-1 order-sm-3  col-md-3">
				<div class="footer_title text-warning">Pages</div>
				<ul style="list-style: none;" class="nav flex-column">
					<li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-link1"></i> Home</a></li>
					<li class="nav-item"><a href="{{ url('about-us') }}" class="nav-link"><i class="fa fa-link1"></i> About Us</a></li>
					<li><a href="{{ url('/special-offer') }}" class="nav-link"><i class="fa fa-link1"></i> Our Special</a></li>
                    <li><a href="{{ url('/menu') }}" class="nav-link"><i class="fa fa-link1"></i> Menu</a></li>
                    <li><a href="{{ url('/gallery') }}" class="nav-link"><i class="fa fa-link1"></i> Gallery</a></li>
					<li><a href="{{ url('/branches') }}" class="nav-link"><i class="fa fa-link1"></i> Our Branches</a></li>
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
			<div class="col-12 col-sm-12 order-1  order-sm-3 col-md-3">
				<div class="footer_title text-warning">Follow Us</div>
				<div class="social" style="padding-left: 15px;">
					<div style="width: 80%; margin: auto;">
						<a href="#"><img src="{{ url('/public/node_modules/logo/tripadvisor.png') }}" class="img-fluid"></a>
					</div>
					<div class="social_link text-center" style="margin: auto;">
						<a href="https://www.fb.com/"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#" class=""><i class="fa fa-google"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="footer_bottom">
		<code class="font-weight-bold text-light">Flavors Of India Asia &copy{{ Date('Y')}} All Right Reserve</code>        
	</div>
    
</div>
<style type="text/css">
    .gotop{
        width: 50px;
        height: 50px;
        border-radius: 50px;
        position: fixed;
        bottom: 5px;
        right: 5px;
        z-index: 2;
    }
</style>

    <button class="gotop"><i class="fa fa-arrow-up"></i></button>

    
   <!--  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 -->


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


        $(".gotop").click( function(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
    </script>

</body>
</html>