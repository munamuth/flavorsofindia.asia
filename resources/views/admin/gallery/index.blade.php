@extends('admin')

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
 	.zoom
 	{
 		position: relative;
 	}
 	.action_button{
 		display: none;
 		position: absolute;
	    right: 22px;
	    bottom: 2px;
 	}
 </style>
@endsection

@section('body')
<div class="container-fluid">
	<div class="row card-body">
		<div class="col">
			<div class="text-right">
				<button class="btn btn-primary btn-sm" id="btnAdd">Add</button>
				<i class="fa fa-question" title="Recommended size: 600 x 500"></i>
			</div>	
		</div>		
	</div>

	<div class="row card-body">
		@foreach( $gallery as $g)
		<div class="col-6 col-sm-3 zoom" style="margin-bottom: 30px">
			<img src="{{ url('storage/'.$g->photo) }}" class="img-fluid">
			<div class="action_button">
				<button class="btn btn-danger btn-sm" onclick="btnChange_click({{ $g->id}})"><i>Change</i></button>
				<button class="btn btn-danger btn-sm" onclick="btnRemove_click({{ $g->id }})"><i>Remove</i></button>
			</div>
		</div>
		@endforeach
	</div>
	
	
</div>


<form action="{{ route('gallery.store') }}" method="post" id="form_store" class="d-none" enctype="multipart/form-data">
	@csrf
	<input type="file" name="file[]" multiple>	
</form>
<form action="" method="post" id="form_update" class="d-none" enctype="multipart/form-data">
	@method('put')
	@csrf
	<input type="file" name="file">	
</form>
<form action="" method="post" id="form_destroy" class="d-none" enctype="multipart/form-data">
	@method('delete')
	@csrf	
</form>
@endsection

@section('script')
	<script type="text/javascript">
		$('#btnAdd').click( function() {
			$('#form_store').find('input[type="file"]').trigger('click');
		});
		$('#form_store').find('input[type="file"]').change( function() {
			$('#form_store').submit();
		});

		function btnChange_click( id ){
			$('#form_update').prop('action', '/admin/gallery/'+id)
			$('#form_update').find('input[type="file"]').trigger('click');
		}
		$('#form_update').find('input[type="file"]').change( function() {
			$('#form_update').submit();
		})

		function btnRemove_click( id ){
			$('#form_destroy').prop('action', '/admin/gallery/'+id)
			$('#form_destroy').submit();
		}
	</script>
@endsection