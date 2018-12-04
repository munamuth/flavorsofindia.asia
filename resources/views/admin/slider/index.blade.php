@extends('admin')

@section('head')
	<style type="text/css">
		.img_background:hover::before{
			content: '';
			width: 100%;
		    height: 100%;
		    background: #020000c9;
		    position: absolute;
		}
		.img_background:hover .action_button{
			display: block;
		}
		.img_background{
			border: solid 1px #dde5ec61;
		}
		.action_button{
			display: none;
			position: absolute;    
			left: 30%;
    		top: 42%;
		}
	</style>
@endsection
@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card-body">
						<div class="text-right">
							<button  class="btn btn-primary btn-sm" id="btnAdd"><i class="fa  fa-plus"></i> Add</button>
							<a href="#" title="Recommanded size: 800 x 350"><i class="fa fa-question"></i></a>
						</div>
				</div>
			</div>
		</div>
		<div class="row card-body">
			@foreach( $sliders as $slider)
				<div class="col-12 col-sm-4" style="margin-bottom: 30px;">
					<div class="img_background" style="width: 100%; position: relative;">
						<img src="{{ url('public/node_modules/image/slider/'.$slider->name) }}" class="img-fluid">
						<div class="action_button">
							<button class="btn btn-danger btn-sm" onclick="btnChange_Click({{ $slider->id }})"><i class="">Change</i></button>
							<button class="btn btn-danger btn-sm" onclick="btnRemove_Click({{ $slider->id }})"><i class="">Remove</i></button>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>


	<form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data" id="form_file" class="d-none">
		@csrf
		<input type="file" name="file[]" multiple>
	</form>

	<form action="" method="post" enctype="multipart/form-data" id="form_file_update" class="d-none">
		@method('put')
		@csrf
		<input type="file" name="file">
	</form>

	<form action="" method="post" enctype="multipart/form-data" id="form_file_delete" class="d-none">
		@method('delete')
		@csrf
	</form>
@endsection

@section('script')
	<script type="text/javascript">
		var imgUrl = "{{ url('/admin/slider/') }}/";
		$('#btnAdd').click( function(data){
			$('#form_file').find('input[type="file"]').trigger('click');
		});
		$('#form_file').find('input[type="file"]').change( function(){
			$('#form_file').submit();
		})

		function btnChange_Click(id)
		{
			$('#form_file_update').prop('action', imgUrl + id);
			$('#form_file_update').find('input[type="file"]').trigger('click');
		}
		$('#form_file_update').find('input[type="file"]').change( function(){
			$('#form_file_update').submit();
		});

		function btnRemove_Click(id)
		{
			$('#form_file_delete').prop('action', imgUrl +id);
			$('#form_file_delete').submit();
		}

	</script>
@endsection