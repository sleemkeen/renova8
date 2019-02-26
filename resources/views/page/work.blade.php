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
                                    <p class="lead text-white lh-180">We love to create web components and themes that look attractive and work effectively on any platform.</p>
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
                        <img alt="Image placeholder" src="../assets/img/prv/img-2-800x600.jpg" class="img-center img-fluid rounded shadow">
                    </div>

                    <div class="col-lg-5 ml-lg-auto">
                        <div class="pt-lg-lg pl-lg-5">
                            <h3 class="heading h3">We are 100% involved</h3>
                            <p class="lead text-gray my-4">With Boomerang you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                            <a href="#" class="link font-weight-bold" data-link="1">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="row row-grid align-items-center">
                    <div class="col-lg-7 order-lg-2 ml-lg-auto">
                        <img alt="Image placeholder" src="../assets/img/prv/img-1-800x600.jpg" class="img-center img-fluid rounded shadow">
                    </div>

                    <div class="col-lg-5 order-lg-1">
                        <div class="pr-lg-5">
                            <h3 class="heading h3">We are 100% involved</h3>
                            <p class="lead text-gray my-4">With Boomerang you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                            <a href="#" class="link font-weight-bold" data-link="1">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="../assets/img/prv/img-1-800x600.jpg">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">The pineapple's story</h4>
                                        <h6 class="text-white">Identity &amp; Web Design</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="../assets/img/prv/img-2-800x600.jpg">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">Beautiful colors from nature</h4>
                                        <h6 class="text-white">Branding</h6>
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
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="../assets/img/prv/img-3-800x600.jpg">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">Golden beauty</h4>
                                        <h6 class="text-white">Identity &amp; Web Design</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="card border-0" data-animate-hover="1">
                            <div class="animate-this">
                                <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="../assets/img/prv/img-1-800x600.jpg">
                                <span class="mask bg-dark opacity-3"></span>
                                <span class="mask mask--hover bg-gradient-primary opacity-4"></span>
                                <div class="card-img-overlay d-flex">
                                    <div class="col pt-2">
                                        <h4 class="h3 text-white text-capitalize mb-1">Living dangerously</h4>
                                        <h6 class="text-white">Marketing</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-md">
                    <a href="#" class="btn btn-sm btn-primary btn-circle">Load more</a>
                </div>
            </div>
        </section>

        <!-- Call to action -->

        <section class="slice slice-lg bg-secondary">

            <span class="tongue tongue-top"><i class="far fa-angle-up"></i></span>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center">
                        <h3 class="font-weight-400">I am ready to start a new project with <span class="font-weight-700">Purpose</span> UI Kit.</h3>
                        <div class="mt-5">
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-primary btn-circle btn-translate--hover px-4">Purchase now<span class="badge badge-pill badge-danger text-sm">$49 USD</span></a>
                            <a href="mailto:support@webpixels.io" class="btn btn-link">Have an issue?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@include('inc.addr')
    </main>



@include('inc.footer')
@endsection