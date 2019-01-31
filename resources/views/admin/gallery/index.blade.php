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
	<div id="accordion">
	@foreach( $year as $y)
	<div class="row">
		<div class="col">
			@foreach( $y["month"] as $month )
				
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
						<div class="card-body">
							<div class="row">
								@foreach( App\Gallery::whereMonth("created_at", $month)->whereYear('created_at', $y)->orderBy('created_at', "desc")->get() as $gallery )
								<div class="col-6 col-sm-3 zoom" style="margin-bottom: 30px">
									<img src="{{ url('public/node_modules/image/gallery/'.$gallery->photo) }}" class="img-fluid">

									<div class="action_button">
										<button class="btn btn-danger btn-sm" onclick="btnChange_click({{ $gallery->id}})"><i>Change</i></button>
										<button class="btn btn-danger btn-sm" onclick="btnRemove_click({{ $gallery->id }})"><i>Remove</i></button>
									</div>
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
		var mUrl = '{{ url("/admin/gallery") }}/';
		$('#btnAdd').click( function() {
			$('#form_store').find('input[type="file"]').trigger('click');
		});
		$('#form_store').find('input[type="file"]').change( function() {
			$('#form_store').submit();
		});

		function btnChange_click( id ){
			$('#form_update').prop('action', mUrl + id)
			$('#form_update').find('input[type="file"]').trigger('click');
		}
		$('#form_update').find('input[type="file"]').change( function() {
			$('#form_update').submit();
		})

		function btnRemove_click( id ){
			$('#form_destroy').prop('action', mUrl + id)
			$('#form_destroy').submit();
		}
	</script>
@endsection