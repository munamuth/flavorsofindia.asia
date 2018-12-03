@extends('admin')

@section('head')
@endsection
@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<form action="{{ route('room_type.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Room Name</label>
					<input type="text" name="name" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label>Photos</label>
					<input type="file" name="file[]" multiple class="">
				</div>
				<div class="form-group">
					<label>Room Facilities</label>
					<br>
					<div class="row">
						@foreach( $facilities as $f )
						<div class="col-6 col-sm-3">
							<label><input type="checkbox" name="facility[]" value="{{$f->id}}"> {{$f->name}}</label>
						</div>
						@endforeach
					</div>
				</div>
				<div class="form-group">
					<label>Room description</label>
					<textarea type="text" name="description" id="mytextarea">
					</textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-info btn-sm">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('script')
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