@extends('layouts.master')
@section('contents')
@include('inc.nav')
<section class="slice slice-lg bg-gradient-primary overflow-hidden bg-cover">

	<div class="container pt-lg position-relative zindex-100">
		<div class="row row-grid justify-content-between">
			<div class="col-lg-6 align-self-end">
				<div class="py-lg-lg text-center text-lg-left">
					<h2 class="heading h1 text-white mb-4" style="text-transform: capitalize;">Project Management</h2>
					<p class="lead lh-180 text-white">
						With a team of Master Tradespeople all under one professional project manager, you’ll only have to deal
						with one person across your entire renovation. It also means our team works together seamlessly, resulting
						in a quicker turnaround and fewer delays.
					</p>
					<div class="mt-5">
						<a href="#" class="btn btn-info btn-circle px-5 mr-lg-4" style="background-color: #0c427b; border:#0c427b">ENQUIRE</a>

					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="d-none d-lg-block">
					<img alt="Image placeholder" src="{{asset('Services-Icons-HR-Kitchen.png')}}" class="img-fluid" style="animation: floating 3s ease infinite">
				</div>
			</div>
		</div>
	</div>

</section>



 
		<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">ENQUIRE ABOUT THIS PACKAGE</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				 <form class="needs-validation" novalidate method="post" id="addinfo">
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="firstName">First Name*</label>
						<input type="text" class="form-control" id="firstName" name="fname" placeholder="First Name" value="" required>
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">Last name*</label>
						<input type="text" class="form-control" id="lastName" name="lname" placeholder="Last Name" value="" required>
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="firstName">Phone Number*</label>
						<input type="text" class="form-control" id="firstName" name="phone" placeholder="PhoneNo" value="" required>
						<div class="invalid-feedback">
							Valid Phone number is required.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">Email*</label>
						<input type="text" class="form-control" id="lastName" name="email" placeholder="" value="" required>
						<div class="invalid-feedback">
							Valid Email is required.
						</div>
					</div>
					<div class="col-md-12 mb-3">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
						<div class="invalid-feedback">
							Please enter your address.
						</div>
					</div>
					<div class="col-md-12 mb-3">
						<label for="address">Package*</label>
						<select class="form-control" name="package" required>
							<option value="">PLEASE SELECT</option>
							<option>MINI PACKAGE</option>
							<option>MEDIUM PACKAGE</option>
							<option>OPTIMUM PACKAGE</option>
						</select>
						<div class="invalid-feedback">
							Please enter a valid Package.
						</div>
					</div>
					<div class="col-md-12 mb-3">
						<label for="address">Enquiry/Question</label>
						<input type="hidden" name="type" value="Project Management &  Quality Assurance">
						<Textarea class="form-control" name="quest" id="address"></Textarea>
						@csrf

						<button class="btn btn-dark mt-4">SEND ENQUIRY</button>
					</div>
				</div>
				</form>
			</div>


		</div>
	</div>
</div>




@include('inc.footer')
@endsection