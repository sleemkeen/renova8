@extends('layouts.master')
@section('contents')
@include('inc.nav')

    <main>







        <!-- Spotlight -->
        <section class="sice slice-lg bg-gradient-primary pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 py-lg">
                        <div class="">
                            <h2 class="display-4 text-white mb-4 lh-110">Our work</h2>
                            <div class="row">
                                <div class="col-lg-10">
                                    <p class="lead text-white lh-180">We’re really proud of the quality work our team delivers. Browse this gallery to explore some of the jobs we’ve completed recently. We’re sure you’ll notice the great finishes and maybe even find a little inspiration for your own project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg">
            <div class="container">
                <div class="row row-grid align-items-center mt--200">
                    <div class="col-lg-7">
                        <img alt="Image placeholder" src="{{asset('assets/img/brand/01.jpg')}}" class="img-center img-fluid rounded shadow">
                    </div>

                    <div class="col-lg-5 ml-lg-auto">
                        <div class="pt-lg-lg pl-lg-5">
                            <h3 class="heading h3">HIGH SPEC HOME</h3>
                            <p class="lead text-gray my-4">Our team recently completed the home of owners peters in Victorial Island.
                            </p>
                            <!-- <a href="#" class="link font-weight-bold" data-link="1">Find out more</a> -->
                        </div>
                    </div>
                </div>
                <div class="row row-grid align-items-center">
                    <div class="col-lg-7 order-lg-2 ml-lg-auto">
                        <img alt="Image placeholder" src="{{asset('assets/img/brand/02.jpg')}}" class="img-center img-fluid rounded shadow">
                    </div>

                    <div class="col-lg-5 order-lg-1">
                        <div class="pr-lg-5">
                            <h3 class="heading h3">DINING ROOM ON A BUDGET</h3>
                            <p class="lead text-gray my-4">With a tight budget, our client, Seun, wanted a dinning room with 
                            bespoke design. </p>
                            <!-- <a href="#" class="link font-weight-bold" data-link="1">Find out more</a> -->
                        </div>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="{{asset('assets/img/brand/03.jpg')}}">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">Complete Home Renovation</h4>
                                        <h6 class="text-white">Renovation</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="{{asset('assets/img/brand/04.jpg')}}">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">SittingRoom Renovation</h4>
                                        <h6 class="text-white">Interior</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="{{asset('assets/img/brand/05.jpg')}}">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">BathRoom Renovation</h4>
                                        <h6 class="text-white">Convienience</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="{{asset('assets/img/brand/06.jpg')}}">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">BedRoom Renovation</h4>
                                        <h6 class="text-white">Comfort</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
               
            </div>
        </section>


    </main>


@include('inc.footer')
@endsection