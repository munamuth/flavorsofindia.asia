@extends('admin')

@section('head')
@endsection
@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="text-right form-group">
				<a href="{{ route('room_type.create') }}" class="btn btn-primary btn-sm">New Room</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12">
			<div class="card">
				<div class="card-header">All Room Type</div>
				<div class="card-body" style="padding: 0">
				<table class="table table-hovered">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>						
					@foreach( $rTypes as $type )
						<tr>
							<td>{{$type->name}}</td>
							<td>{{$type->getStatus->name}}</td>

							<td>
								<a href="{{ route('room_type.show', $type->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"> View</i></a>
								<a href="{{ route('room_type.edit', $type->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
								<a href="{{ route('room_type.destroy', $type->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Destroy</i></a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>			
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection
@section('script')
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                dotted: true,
                items : 1,
              })
            })
          </script>
@endsection