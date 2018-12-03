@extends('master')
	
@section('head')

@endsection
@section('slide')
	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center text-danger font-weight-bold">Rooms</h1>
  </div>
</div>
@endsection
@section('body')
	<div class="container">
		<div class="row">
			@foreach( $rtypes as $type )
			<div class="col-12 col-sm-6" style="margin-bottom: 30px;">
				<div class="">
					<div class="owl-carousel" data-aos="fade-up">
					@foreach( $type->getRoomTypePhoto as $getPhoto )
						<div><img src="{{ url('storage/'.App\Photo::find($getPhoto->photo_id)->name) }}"></div>	
					@endforeach
					</div>
					<div>
						<h3 class="text-warning font-weight-bold">{{ $type->name }}</h3>
						<p>
							{!! str_limit($type->description, 500) !!}
						</p>
						<div class="text-right">
							<a href="{{ url('/rooms/read_more/room_id='.$type->id) }}" class="btn btn-sm btn-warning">Read More</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="form-group"></div>
@endsection
@section('script')

@endsection