@extends('layouts.master')
@section('contents')
@include('inc.nav')
<section class="slice slice-lg bg-gradient-primary overflow-hidden bg-cover">

	<div class="container pt-lg position-relative zindex-100">
		<div class="row row-grid justify-content-between">
			<div class="col-lg-6 align-self-end">
				<div class="py-lg-lg text-center text-lg-left">
					<h2 class="heading h1 text-white mb-4">RESIDENTIAL RENOVATIONS</h2>
					<p class="lead lh-180 text-white">
						We re-design, refashion your decor, and entirely change the drabness of your home space into beautiful, fresh and tasteful finish, taking into consideration the most minute of details. We do complete kitchen &amp; bathroom renovations to outdoor living spaces and even home exterior surfaces. Our renovation and maintenance services come with a subtle communication of comfort, improved functionality and convenience.
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
		<div class="row">
			<div class="col-lg-12">
				<div class="mb-lg">
					<div class="row">
						<div class="col-md-3">
							<img alt="Image placeholder" src="{{asset('customdesign.png')}}" class="img-fluid">
						</div>
						<div class="col-md-9">
							<h2 class="h2 mb-4" style="text-transform: capitalize;">Living rooms</h2>
							<p class="mt-3">From rental renovations to high-spec architectural homes, we design to fit any space and budget. Our range of packages let you choose the option that best suits your budget and lifestyle. And with access to a team of interior design professionals we know we can find a modern, cost-effective solution for you. </p>
						</div>
					</div>

				</div>
				<div class="mb-lg">
					<div class="row">

						<div class="col-md-9">
							<h2 class="h2" style="text-transform: capitalize;">Bathrooms</h2>
							<p class="mt-3">Whether your package is Good, Better or Best, we can take care of sourcing and installing cost-effective and energy-efficient appliances and products in every kitchen we work on. This takes any pressure off you, ensuring everything works as it should and fits any new or existing cabinetry.</p>
						</div>
						<div class="col-md-3">
							<img alt="Image placeholder" src="{{asset('customdesign.png')}}" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="mb-lg">
					<div class="row">
						<div class="col-md-3">
							<img alt="Image placeholder" src="{{asset('customdesign.png')}}" class="img-fluid">
						</div>
						<div class="col-md-9">
							<h2 class="h2" style="text-transform: capitalize;">Kitchen</h2>
							<p class="mt-3">Regardless of your budget, quality solutions are standard across every design we recommend. Our network of industry connections lets us supply products you may not have access to yourself and allows us to focus on smart kitchen fixtures and fittings that use your space effectively. </p>
						</div>
					</div>

				</div>
				<div class="mb-lg">
					<div class="row">

						<div class="col-md-9">
							<h2 class="h2" style="text-transform: capitalize;">Patio covers (terraces)</h2>
							<p class="mt-3">Whether your package is Good, Better or Best, we can take care of sourcing and installing cost-effective and energy-efficient appliances and products in every kitchen we work on. This takes any pressure off you, ensuring everything works as it should and fits any new or existing cabinetry.</p>
						</div>
						<div class="col-md-3">
							<img alt="Image placeholder" src="{{asset('customdesign.png')}}" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="mb-lg">
					<div class="row">
						<div class="col-md-3">
							<img alt="Image placeholder" src="{{asset('customdesign.png')}}" class="img-fluid">
						</div>
						<div class="col-md-9">
							<h2 class="h2" style="text-transform: capitalize;">Interior renovations</h2>
							<p class="mt-3">Regardless of your budget, quality solutions are standard across every design we recommend. Our network of industry connections lets us supply products you may not have access to yourself and allows us to focus on smart kitchen fixtures and fittings that use your space effectively. </p>
						</div>
					</div>

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