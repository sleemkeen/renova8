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
						<a href="#" class="btn btn-info btn-circle px-5 mr-lg-4" style="background-color: #0c427b; border:#0c427b">SEE OUR PACKAGES</a>

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



<section class="slice slice-lg">
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card card-pricing popular box-shadow-3 text-center px-3 mb-4" style="min-height: 683px">
						<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white box-shadow-2">MINI PACKAGE</span>
						<div class="card-header py-5">
							<h1 class="h1 font-weight-700 text-primary text-center mb-0" data-pricing-value="30">$<span class="price">49</span><span class="h6 text-muted ml-2">/ per month</span></h1>
						</div>
						<div class="card-body py-4">
							<p>The mini package is more fitting for smaller homes and spaces, rented apartments or other properties not personal and may have appliances not expensive but tasteful nonetheless, laminated benchtops and other designs in this light. 
							Costs are left at a minimum with the very basics in place.</p>
						</div>
						<div class="card-footer">
							<p class="text-center">AVAILABLE FROM</p>
							<div class="mt-2">
								<a href="#" class="btn btn-info btn-circle px-5 mr-lg-4" data-toggle="modal" data-target="#myModal" style="background-color: #0c427b; border:#0c427b">ENQUIRE NOW</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing popular box-shadow-3 text-center px-3 mb-4" style="min-height: 683px">
						<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white box-shadow-2">MEDIUM PACKAGE</span>
						<div class="card-header py-5">
							<h1 class="h1 font-weight-700 text-primary text-center mb-0" data-pricing-value="30">$<span class="price">49</span><span class="h6 text-muted ml-2">/ per month</span></h1>
						</div>
						<div class="card-body py-4">
							<p>The medium package is best for a family fairly occupied with kitchen activities and comes with fittings that make most use of the available space in a way that makes for comfort and convenience.</p>
						</div>
						<div class="card-footer">
							<p class="text-center">AVAILABLE FROM</p>
							<div class="mt-2">
								<a href="#" class="btn btn-info btn-circle px-5 mr-lg-4" data-toggle="modal" data-target="#myModal" style="background-color: #0c427b; border:#0c427b">ENQUIRE NOW</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing popular box-shadow-3 text-center px-3 mb-4" style="min-height: 683px">
						<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white box-shadow-2">OPTIMUM PACKAGE</span>
						<div class="card-header py-5">
							<h1 class="h1 font-weight-700 text-primary text-center mb-0" data-pricing-value="30">$<span class="price">49</span><span class="h6 text-muted ml-2">/ per month</span></h1>
						</div>
						<div class="card-body py-4">
							<p>This package is most fitting for families or ventures that have a constant presence in the kitchen. The option comes customized. Just the kind of kitchen where family histories are shared through treasured recipes, and where love and support are served up with every meal. 
							It comes out unique, ultimately reconfigured with required additions.</p>
						</div>
						<div class="card-footer">
							<p class="text-center">AVAILABLE FROM</p>
							<div class="mt-2">
								<a href="#" class="btn btn-info btn-circle px-5 mr-lg-4" data-toggle="modal" data-target="#myModal" style="background-color: #0c427b; border:#0c427b">ENQUIRE NOW</a>

							</div>
						</div>
					</div>
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
						<h4 class="modal-title">Modal Heading</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						Modal body..
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>



@include('inc.footer')
@endsection