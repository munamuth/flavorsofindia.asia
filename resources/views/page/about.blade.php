@extends('master')

@section('head')
<style type="text/css">
	#about_body * img[class="note-float-left"]{
		padding-right: 15px;
		height: auto;
	}
	#about_body * img[class="note-float-right"]{
		padding-left: 15px;
		height: auto;
	}
	@media screen and (max-width: 768px){
		#about_body * img[class="note-float-left"]{
		padding-right: 0px;
		padding-bottom: 5px;
		width: 100% !important;
		}
		#about_body * img[class="note-float-right"]{
			padding-left: 0px;
			padding-bottom: 5px;
			width: 100% !important;
		}
	}
</style>
@endsection
@section('slide')
	<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center text-danger font-weight-bold">About Us</h1>
  </div>
</div> -->
@endsection
@section('body')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card-body" id="about_body">

				{!! $about->description !!}
				
			</div>
		</div>
	</div>
	<br>
</div>
@endsection
@section('script')

@endsection