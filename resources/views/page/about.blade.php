@extends('master')

@section('head')
<style type="text/css">
	.img_about{
		width: 50%;
		padding-left: 15px;
		padding-bottom: 15px;
		float: right;
	}
	@media ( max-width: 768px )
	{
		.img_about{
			width: 100%;
			padding: 0;
		}
	}
</style>
@endsection
@section('body')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card-body">

				<img src="{{ url('public/node_modules/logo/logo.png') }}" class="img_about">					
				<p><h1>Flavors Of India</h1></p>
				
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection