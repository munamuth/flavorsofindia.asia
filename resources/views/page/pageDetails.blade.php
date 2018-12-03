@extends('master')
@section('head')
<style type="text/css">
	.con_overlay::before{
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	content: '';
        	background: #25394c88;
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
<div class="jumbotron jumbotron-fluid">
  	<div class="container">	
		<h1 class="text-center text-danger display-4 font-weight-bold">{{$rtype->name}}</h1>
	</div>
</div>
@endsection
@section('body') 
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-8">
				<div class="card" style="border: 0;">
					<div class="owl-carousel animated bounceInDown">
					@foreach($rtype->getRoomTypePhoto as $getPhoto )
    					<div><img src="{{ url('storage/'.App\Photo::find($getPhoto->photo_id)->name) }}"></div>
					@endforeach
				    </div>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<p class="font-weight-bold">Room Facilities</p>
				<ul style="list-style: none;">
				@foreach($rtype->getRoomFacility as $getFacility )
					<li class="text-success"><i class="{{App\Facility::find($getFacility->facility_id)->icon}}"></i>&nbsp&nbsp&nbsp&nbsp{{App\Facility::find($getFacility->facility_id)->name}}</li>
				@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
				    <p>
				    	{!! $rtype->description !!}
				    </p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<h1 class="font-weight-bold text-center bg-secondary text-light rounded p-3">Related</h1>
			</div>
		</div>
		<div class="row">
			
			@foreach( $related as $r )
			<div class="col-12 col-sm " data-aos="flip-up" style="margin-bottom: 30px;">
							<a href="{{ url('/rooms/read_more/room_id='.$r->id) }}">
								<div class="con_overlay" style="position: relative;">
									<img src="{{ url('storage/'.App\Photo::find($r->getRoomTypePhoto[0]->photo_id)->name ) }}" class="img-fluid">
									<div class="overlay">
										<center><h4 class="text-light">{{$r->name}}</h4></center>
									</div>
								</div>
							</a>
						</div>
			@endforeach
			
		</div>
	</div>
@endsection
@section('script')
@endsection