@extends('master')

@section('head')

 <style>/*
        .title_center::before, .title_center::after{
        	width: 35%;
        	height: 1px;
        	position: absolute;
        	content: '';
        	text-align: center;
        	background: #123;
        	bottom: 10px;
        }
        .title_center::before{
        	left: 0;
        }
        .title_center::after{
        	right: 0;
        }*/
        .title_center{
        	font-weight: 900;
        	position: relative;
        	text-align: center;
        }
        .con_overlay::before{
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	content: '';
        	background: #25394c94;
        	top: 0;
        	left: 0;
        }
        .overlay{
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	top: 43%;
        	color: #fff;
        }
    </style>
@endsection
@section('slide')
<div class="slider" data-aos="zoom-out-down">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  
		  <div class="carousel-inner">
		  	@foreach( $sliders as $index => $slider)
		  		@if( $index == 0 )
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ url('public/node_modules/image/slider/'.$slider->name) }}" alt="First slide">
			    </div>
			    @else
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ url('public/node_modules/image/slider/'.$slider->name) }}" alt="First slide">
			    </div>
			    @endif
			@endforeach
		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
        <br>




</div>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                 <fieldset style="border: dotted 1px; padding:inherit; margin: inherit;">
                    <legend style="width: auto; font-size: inherit;">Personalia:</legend>
                    <q>
                        Review here
                    </q>
                </fieldset>
            </div>
            <div class="col-12 col-sm-3">
                <fieldset style="border: dotted 1px; padding:inherit; margin: inherit;">
                    <legend style="width: auto; font-size: inherit;">Personalia:</legend>
                    <q>
                        Review here
                    </q>
                </fieldset>
            </div>
            <div class="col-12 col-sm-3">
                <fieldset style="border: dotted 1px; padding:inherit; margin: inherit;">
                    <legend style="width: auto; font-size: inherit;">Personalia:</legend>
                    <q>
                        Review here
                    </q>
                </fieldset>
            </div>
            <div class="col-12 col-sm-3">
                <fieldset style="border: dotted 1px; padding:inherit; margin: inherit;">
                    <legend style="width: auto; font-size: inherit;">Personalia:</legend>
                    <q>
                        Review here
                    </q>
                </fieldset>
            </div>
            <div class="col-12 col-sm-3">
                <fieldset style="border: dotted 1px; padding:inherit; margin: inherit;">
                    <legend style="width: auto; font-size: inherit;">Personalia:</legend>
                    <q>
                        Review here
                    </q>
                    <iframe src="https://goo.gl/maps/tVu1jdBhKRo" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </fieldset>
            </div>
        </div>
        <br>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            loop:true,
            margin:10,
            nav:false,
            dots:true,
            dotsEach: false,
            items : 1,
        });
        $('.carousel').carousel()
    </script>
@endsection

