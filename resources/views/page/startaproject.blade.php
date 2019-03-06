@extends('layouts.master')
@section('contents')
@include('inc.nav')
<section class="slice slice-lg">
    <div class="container pt-lg">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1 class="lh-150 mb-3">START YOUR PROJECT.</h1>
                <p class="lead text-muted mb-0">At Renova8, we have created a suitable pricing structure that accommodates everyone’s budget without hampering our standards and quality. Our pricing system leaves room for customers’ choice, preference and taste to be achieved. With a proper plan and feasible budget your dream makeover is only an inch away from becoming a reality.</p>

            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg" style="background-color: #f5f5f5">
    <div class="container pt-lg">
        <div class="row justify-content-center">
            <div class="col-md-3">
              

                    <div class="card" style="min-height:620px">
                        <img alt="Image placeholder" src="{{asset('assets/img/brand/009.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="heading h5 mb-1">
                                <span class="card-title">COMMERCIAL RENOVATION</span>
                                <small class="text-muted"></small>
                            </h5> 
                            <p class="card-text">Our renovation services lead to delightful results. We fix problem areas in your home. We provide you with the features and aesthetic qualities that serve your needs and express your personality. Our renovations possess structural integrity.</p>
                            <a href="services/commercial" class="btn btn-sm btn-dark">See Our Packages</a>
                        </div>
                    </div>
            

            </div>
            <div class="col-md-3">
              

                    <div class="card" style="min-height:620px">
                        <img alt="Image placeholder" src="{{asset('assets/img/brand/003.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="heading h5 mb-1">
                                <span class="card-title">RESIDENTIAL RENOVATION</span>
                                <small class="text-muted"></small>
                            </h5> 
                            <p class="card-text">Key to enjoying the summer months, a proper outdoor space lets you make the most of the warm, sunny weather. Whether you’re entertaining guests around the barbecue or simply lounging in the sun, we can help you revamp your space your way.</p>
                            <a href="services/residential" class="btn btn-sm btn-dark">See Our Packages</a>
                        </div>
                    </div>


            </div>
            <div class="col-md-3">
              

                    <div class="card" style="min-height:620px">
                        <img alt="Image placeholder" src="{{asset('assets/img/brand/002.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="heading h5 mb-1">
                                <span class="card-title">ARCHITECTURAL RENOVATION</span>
                                <small class="text-muted"></small>
                            </h5> 
                            <p class="card-text">Our range of capabilities allows us the freedom to provide diverse architectural solutions, to leverage innovative products and materials, and to include our clients’ visions to improve each project we touch.</p>
                            <a href="services/architecture" class="btn btn-sm btn-dark">See Our Packages</a>
                        </div>
                    </div>

          

            </div>
            <div class="col-md-3">
               
                        <div class="card" style="min-height:620px">
                            <img alt="Image placeholder" src="{{asset('assets/img/brand/007.png')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="heading h5 mb-1">
                                    <span class="card-title">PROJECT MANAGEMENT & QUALITY ASSURANCE</span>
                                    <small class="text-muted"></small>
                                </h5> 
                                <p class="card-text">Remodeling your home is an involved experience! There are a lot of important decisions you will need to make from the time you approve the initial drawings, to enjoying your finished project.</p>
                                <a href="services/projectmanagement" class="btn btn-sm btn-dark">See Our Packages</a>
                            </div>
                        </div>
                                

            </div>
        </div>
    </div>
</section>


@include('inc.footer')
@endsection