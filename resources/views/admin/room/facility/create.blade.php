@extends('admin')

@section('head')
@endsection
@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header bg-info text-light"><b>Create Room Facility</b></div>
				<form action="{{ route('facility.store') }}" method="post">
					@csrf
					<div class="card-body">
						<div class="formg-group">
							<div class="row justify-content-md-center">
								<div class="col-12 col-sm-4">
									<label>Facility Name</label>
								</div>
								<div class="col-12 col-sm-5">
									<input type="text" name="name" class="form-control form-control-sm">
								</div>
							</div>							
						</div>
						<div class="formg-group">
							<div class="row justify-content-md-center">
								<div class="col-12 col-sm-4">
									<label>Select Icon</label>
								</div>
								<div class="col-12 col-sm-5">
									<p style="font-size: 20px" class="icon">
										<i class="fa fa-minus-circle"></i> 
										<select name="icon" class="d-none">
											<option class="icon_value" value="fa fa-minus-circle"></option>
										</select>
										<button class="btn btn-danger btn-sm" type="button" onclick="btnChange_Click()">Change</button>
									</p>
								</div>
							<div>
								

							</div></div>
						</div>
						<div class="form-group">
							<div class="row justify-content-md-center">
								<div class="col-12 col-sm-4"></div>
								<div class="col-12 col-sm-5 text-right">
									<button class="btn btn-success btn-sm">Save</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal fade" id="icon">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							Select Icon
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="row">
								@foreach( App\IconCategory::get() as $cat )
									<div class="col-12 bg-info text-light"> {{ $cat->name }}</div>
										@foreach( App\Icon::where('icon_cat', $cat->id)->get() as $i)
										<div class="col-2 col-sm-1" style="padding-bottom: 5px; padding-top: 5px;"><i class="{{ $i->name }} fa_icon" style="font-size: 20px; cursor: pointer" title="{{$i->name}}"></i></div>
										@endforeach
								@endforeach
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card"  id="icon">
				<div class="card-body">
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	function btnChange_Click(){
		$('#icon').modal();
	}
	$('.fa_icon').click( function(){
		fa = $(this).prop('class');
		$('.icon').find('i').removeClass();
		$('.icon').find('i').addClass(fa);
		$('.icon_value').val(fa);
		$('.icon_value').removeClass("fa_icon");

		$('#icon').modal("hide");
	});
</script>
@endsection