@extends('master')

@section('head')
<style type="text/css">
	@-webkit-keyframes leaves {
    0% {
        -webkit-transform: scale(1.0);
    }
    100% {
        -webkit-transform: scale(1.1);
    }
}
 	.zoom:hover, .zoom:hover::before, .zoom:hover .action_button{
 		display: block;
 		animation: leaves 1s forwards;
 		/*transform: scale(1.05);*/
 	}
</style>
@endsection
@section('slide')
<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center text-danger font-weight-bold">Gallery</h1>
  </div>
</div> -->
@endsection
@section('body')
<br>
<!-- 
<div class="container">
	<div class="row">
		@foreach($gallery as $i => $g)
		<div class="col-12 col-sm-4 zoom" style="margin-bottom: 30px;">
			<img src="{{ url('public/node_modules/image/gallery/'.$g->photo) }}" class="img-fluid" data-aos="flip-left">
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="card-body">
			<div class="text-right float-right">
				{{ $gallery->links() }}
			</div>
		</div>
	</div>
</div> -->


<div class="container mb-5">
    <div id="accordion">
    @foreach( $year as $y)
    <div class="row">
        <div class="col">
            @foreach( $y["month"] as $index => $month )
                
                <div class="card">                  
                    
                    @if($month == 01 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"January ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 02 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"February ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 03 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"March ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 04 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"April ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 05 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"May ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 06 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"June ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 07 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"July ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == "08" )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"August ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == "09" )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"September ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 10 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"October ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 11 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"November ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @elseif($month == 12 )
                        <div class="card-header h4" data-toggle="collapse" data-target="#collapse{{$month.$y['year']}}">{{"December ".$y["year"]}} <span class="float-right dropdown-toggle"></span></div>
                    @endif      
                    
                    <div id="collapse{{$month.$y['year']}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body pb-0 mb-0">
                            <div class="row">
                                @foreach( App\Gallery::whereMonth("created_at", $month)->whereYear('created_at', $y)->orderBy('created_at', "desc")->get() as $gallery )
                                <div class="col-12 col-sm-6 col-md-4 zoom" style="margin-bottom: 30px">
                                    <img src="{{ url('public/node_modules/image/gallery/'.$gallery->photo) }}" class="img-fluid">

                                </div>  
                                @endforeach
                            </div>                      
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
    @endforeach
    </div>
    
</div>
@endsection
@section('script')
<script type="text/javascript">
        {
            window.addEventListener("scroll", Animation);
            function Animation()
            {
                $(".test:visible").addClass("animated fadeInLeft");
            }
        }

        function ShowCollapse() {
            $('.collapse:eq(1)').addClass("show")
        }
        ShowCollapse();
</script>
@endsection