@extends('admin')

@section('head')
@endsection
@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="text-right">
				<a href="{{ route('facility.create') }}" class="btn btn-primary btn-sm">New Facility</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body" style="padding: 0;">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Icon</th>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($facility as $f)
        						<tr>
        							<td><i class="{{$f->icon}}"></i></td>
        							<td>{{$f->name}}</td>
        							<td>
        								<button class="btn btn-danger"><i>Change Icon</i></button>
        								<button class="btn btn-danger"><i>Change Name</i></button>
        								<button class="btn btn-danger"><i>Destroy</i></button>
        							</td>
        						</tr>
					        @endforeach()
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection