@extends('welcome')

@section('head')
@endsection
@section('body')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="text-right">
				<a href="{{ route('room.create') }}" class="btn btn-primary btn-sm">New Room</a>
			</div>
		</div>
	</div>
	<div class="row">
		@foreach( $rooms as $room )
		<div class="col-12 col-sm-4">
			{{$room}}
		</div>
		@endforeach
	</div>
</div>
@endsection
@section('script')
@endsection