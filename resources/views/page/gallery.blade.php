@extends('master')

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
</style>
@endsection
@section('slide')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center text-danger font-weight-bold">Gallery</h1>
  </div>
</div>
@endsection
@section('body')
<br>

<div class="container">
	<div class="row">
		@foreach($gallery as $i => $g)
		<div class="col-12 col-sm-4 zoom" style="margin-bottom: 30px;">
			<img src="{{ url('storage/'.$g->photo) }}" class="img-fluid" data-aos="flip-left">
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="card-body">
			<div class="text-right float-right">
				{{ $gallery->links() }}
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
        {
            window.addEventListener("scroll", Animation);
            function Animation()
            {
                $(".test:visible").addClass("animated fadeInLeft");
            }
        }
</script>
@endsection