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
        .review{
            min-height: 300px;
            position: relative;
        }
        .review_type{
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            bottom: 15px;
        }
        .slider{
            background: #456;
            display: flex;
        }
        .slide_image{
            width: 70%;
        }
        .history{
            width: 30%;
            padding: 0 15px;
            color: #000;
            background: #f9f9f9;
            font-size: 20px;
            line-height: 30px;
        }
        @media(max-width: 1024px){
            .slider{
                width: 100%;
                display: block;
            }
            .slide_image{
                width: 100%;
                float: left;
            }
            .history{
                width: 100%;
                float: left;
            }
        }
        .my_col{
            width: 20%;
            padding: 15px;
        }
        @media screen and (max-width: 1366px){
          .my_col{
                width: 25%;
                padding: 15px;
            }  
            .my_col:last-child{
                display: none;
            }
        }
        @media screen and (max-width: 1024px){
          .my_col{
                width: 50%;
                padding: 15px;
            }  
            .my_col:last-child{
                display: none;
            }
            .review{
                padding-bottom: 50px;
            }
        }
        @media screen and (max-width: 568px){
          .my_col{
                width: 100%;
                padding: 15px;
            }  
            .my_col:last-child{
                display: block;
            }
        }
    </style>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
@endsection
@section('slide')
















<div class="slider" data-aos="zoom-out-down">
       <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            @foreach( $sliders as $index => $slider)
            <div>
                <img data-u="image" src="{{ url('public/node_modules/image/slider/'.$slider->name) }}" />
                <img data-u="thumb" src="{{ url('public/node_modules/image/slider/'.$slider->name) }}" />
            </div>
            @endforeach
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>



        <div class="history">
            {!! str_limit($history->description, 1000) !!}
        </div>
</div>
@endsection
@section('body')
    <div class="container-fluid pt-5">
        <div class="row pl-5 pr-5">
            <div class="col">
                {!! App\About::find(2)->description !!}
            </div>
        </div>
        <div class="row pl-5 pr-5">
            @foreach($review as $index=>$r)

                    <div class="my_col m-auto">
                        <div class="card mb-5">
                            <div class="card-header bg-secondary text-light p-1 ">
                                <b>{{$r->name}}</b>
                            </div>
                            <div class="card-body review">
                                <q>
                                    {{ str_limit($r->description, 150)}}
                                </q>

                                <div class="review_type text-center pt-5 pl-5 pr-5">
                                    @if( $r->review_type == 1 )
                                        <img src="{{ url('public/node_modules/image/lib/google_review.png') }}" class="img-fluid" style="max-width: 150px;">
                                    @else
                                        <img src="{{ url('public/node_modules/image/lib/tripadvisor_review.png') }}" class="img-fluid" style="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach



        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="jumbotron bg-light" style="margin-bottom: 0;">
                    
                   
                        <div class="row">
                            <div class="col-12 col-sm-5">
                                <h3 class="text-danger font-weight-bold">You also can find us at:</h3>
                            </div>
                            <div class="col-12 col-sm-7" style="padding-top: 50px;">
                                <img src="{{ url('/public/node_modules/image/lib/nham24.png') }}" style="width: 100px; height: 50px;">
                                <img src="{{ url('/public/node_modules/image/lib/mealtemple.png') }}" style="width: 100px; height: 50px;">
                                <img src="{{ url('/public/node_modules/image/lib/pinkhome.png') }}" style="width: 100px; height: 50px;">
                                <img src="{{ url('/public/node_modules/image/lib/yourppde.png') }}" style="width: 100px; height: 50px;">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection


@section('script')

    <script type="text/javascript" src="{{ url('/public/node_modules/jssor/js/jssor.slider-27.5.0.min.js') }}"></script>
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

    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script type="text/javascript">jssor_1_slider_init();</script>
@endsection

