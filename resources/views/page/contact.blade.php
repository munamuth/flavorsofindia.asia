@extends('master')

@section('head')


@endsection

@section('slide')
	<div class="jumbotron" style="margin-bottom: 0;">
		<h1 class="text-center display-4 text-danger font-weight-bold">Contact Us</h1>
	</div>
@endsection
@section('body')
	<div class="maps" style="width: 100%;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0254050315816!2d104.93650581429262!3d11.550035247596758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109512ccd9d92a9%3A0x90ffd68b8a69159a!2sV+Boutique+Hotel+%40+Koh+Pich!5e0!3m2!1sen!2skh!4v1538041137659" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-5">
				<div class="card-body">

					<div>
						<p style="font-size: 24px; color: Orange" class="font-weight-bold">Contact Information</p>
					</div>
					<div style="margin-bottom: 15px;">
						<i class="fa fa-map"></i> Ground Floor, Suntown Plaza, Cnr Russian Blvd & Northbridge Rd, Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh, Cambodia.
					</div>
					<div style="margin-bottom: 15px;">
						<i class="fa fa-phone"></i> +855 23 999 999
					</div>
					<div style="margin-bottom: 15px;">
						<i class="fa fa-envelope"></i> info@email.com
					</div>
					<div style="margin-bottom: 15px;">
						<i class="fa fa-clock-o"></i> 24h/day;  7days/week
					</div>

				</div>
			</div>
			<div class="col-12 col-sm-7">
				<div class="card-body">
					<p style="font-size: 24px; color: Orange" class="font-weight-bold">Inquiry</p>
					<form>
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control form-control-sm" required placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label>Your Email</label>
							<input type="email" name="email" class="form-control form-control-sm" required placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<label>Your Message</label>
							<textarea name="message" class="form-control form-control-sm" required placeholder="Enter Your Message" rows="5"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-warning text-light"><i class="fa fa-paper-plane"></i> Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection