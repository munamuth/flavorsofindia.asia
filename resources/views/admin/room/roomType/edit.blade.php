@extends('admin')

@section('head')
<style type="text/css">
	.action_button
	{
		position: absolute;
		display: flex;
		bottom: 0;
		right: 0;
	}
</style>
@endsection
@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col">
					<ul class="nav nav-tabs nav-justified">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#edit">Edit Room Type</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#editPhoto">Edit Room Type Photos</a>
						</li>
					</ul>
					<div class="card tab-content" id="">
						<div class="card-body container tab-pane active" id="edit">
							<form method="post" action="{{ route('room_type.update', $roomType->id) }}">
								@method('PUT')
								@csrf
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" value="{{ $roomType->name }}" class="form-control form-control-sm">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status_id" class="form-control form-control-sm">
										@foreach( App\Status::get() as $status )
											@if( $status->id == $roomType->status_id )
												<option value="{{$status->id}}" selected>{{$status->name}}</option>
											@else
												<option value="{{$status->id}}">{{$status->name}}</option>
											@endif
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Facilities</label>
									<br>
									<div class="row">
										@foreach( $facilities as $f )
											<div class="col-6 col-sm-3">
												<label><input type="checkbox" name="facility[]" value="{{$f->id}}" class="facility"> {{$f->name}}</label>
											</div>
										@endforeach
									</div>
								</div>
								<div class="form-group">
									<textarea name="description">{{$roomType->description}}</textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-sm btn-success">Update</button>
								</div>
							</form>
						</div>
						<div class="card-body container tab-pane fade" id="editPhoto">
							<div class="form-group text-right">
							  <button class="btn btn-info btn-sm" onclick="btnAdd_Click()"><i class="fa fa-plus"> Add</i></button>
							</div>
							<div class="row">
								@foreach($roomType->getRoomTypePhoto as $getPhoto)
									<div class="col-12 col-sm-6" style="margin-bottom: 15px;">
										<div style="position: relative;">
											<img src="{{ url('storage/'.App\Photo::find($getPhoto->photo_id)->name) }}" class="img-fluid">
											<div class="action_button">
												<button class="btn btn-danger btn-sm" onclick="btnChange_Click({{ App\Photo::find($getPhoto->photo_id)->id}})"><i>Change</i></button>
												&nbsp
												<form action="{{ route('photo.destroy', App\Photo::find($getPhoto->photo_id)->id) }}" method="post">
													@method('delete')
													@csrf
													<button type="submit" class="btn btn-danger btn-sm"><i>Remove</i></button>
												</form>
												
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
<form class="d-none" method="post" action="" id="frmUpdatePhoto" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<input type="file" name="file">
</form>

<form method="post" action="{{ route('photo.store') }}" class="d-none" enctype="multipart/form-data" id="frmAddPhoto">	
	@csrf
	<input type="text" name="id" value="{{$roomType->id}}">
	<input type="file" name="file[]" multiple>
</form>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('/node_modules/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	var frmUpdatePhoto = $('#frmUpdatePhoto');
	var frmAddPhoto =  $('#frmAddPhoto');
	function btnChange_Click(id)
	{
		frmUpdatePhoto.prop('action', '/admin/photo/'+id);
		frmUpdatePhoto.find('input[name="file"]').trigger('click');
	}
	frmUpdatePhoto.find('input[name="file"]').change( function(){
		frmUpdatePhoto.submit();
	});


	function btnAdd_Click()
	{
		frmAddPhoto.find('input[name="file[]"]').trigger('click');
	}
	frmAddPhoto.find('input[name="file[]"]').change(function(e){
		frmAddPhoto.submit();
	})

	facility = $('.facility');
	facility.each( function(e){
		facCheckBox = $(this);
		var rtfac = {!! json_encode($roomType->getRoomFacility->toArray()) !!};
		for( i = 0 ; i<rtfac.length; i++)
		{
			if(rtfac[i].facility_id == facCheckBox.val() ){
				facCheckBox.prop('checked', 'true');
				console.log('true')
			}
		}
	});
</script>
<script type="text/javascript">
		tinymce.init({
		selector: 'textarea',
		height: '250',
		plugins: [
		  'advlist autolink lists link image charmap print preview anchor textcolor',
		  'searchreplace visualblocks code fullscreen',
		  ' table contextmenu paste code help wordcount'
			],
		menubar: false,
		toolbar: ' undo redo |  formatselect | bold italic backcolor  | table | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image | help',
		
		// enable title field in the Image dialog
		image_title: true, 
		// enable automatic uploads of images represented by blob or data URIs
  		automatic_uploads: true,
  		// URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  		// images_upload_url: 'postAcceptor.php',
  		// here we add custom filepicker only to Image dialog
  		file_picker_types: 'image', 
  		// and here's our custom image picker
  		file_picker_callback: function(cb, value, meta) {
    	var input = document.createElement('input');
    	input.setAttribute('type', 'file');
    	input.setAttribute('accept', 'image/*');
    
    	// Note: In modern browsers input[type="file"] is functional without 
	    	// even adding it to the DOM, but that might not be the case in some older
	    	// or quirky browsers like IE, so you might want to add it to the DOM
	    	// just in case, and visually hide it. And do not forget do remove it
	    	// once you do not need it anymore.

	    	input.onchange = function() {
	      		var file = this.files[0];
	      
	      		var reader = new FileReader();
	      		reader.onload = function () {
	        	// Note: Now we need to register the blob in TinyMCEs image blob
	        	// registry. In the next release this part hopefully won't be
	        	// necessary, as we are looking to handle it internally.
	        	var id = 'blobid' + (new Date()).getTime();
	        	var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
	        	var base64 = reader.result.split(',')[1];
	        	var blobInfo = blobCache.create(id, file, base64);
	        	blobCache.add(blobInfo);

	        	// call the callback and populate the Title field with the file name
	        	cb(blobInfo.blobUri(), { title: file.name });
		      	};
		      reader.readAsDataURL(file);
		    };
		    
		    input.click();
		  }
		});
  </script>
@endsection