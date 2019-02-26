@extends('layouts.master')
@section('contents')
@include('inc.nav')

<main>

 <section class="slice slice-lg pb-200 bg-cover bg-size--cover" style="background-image: url('../assets/img/renov.jpg');">
            <span class="mask bg-custom opacity-8"></span>
            <div class="container pt-md pt-lg-xl pb-lg-md ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="heading display-4 text-white mb-2">WE'RE EXPERTS IN HOME <br>RENOVATIONS</h2>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <p class="lead text-white lh-180">With over 30 years’ industry know-how and a large team of skilled Master Tradespeople and dedicated project managers, we make home renovations stress-free and easy</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative pb-lg-lg pt-lg-lg bg-secondary">
            <div class="bg-img-holder top-0 left-0 col-lg-6 zindex-100" data-bg-size="cover" style="background-image: url(&quot;../assets/img/prv/team-6-800x800.jpg&quot;); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
                <img alt="Image placeholder" src="../assets/img/prv/team-6-800x800.jpg">
            </div>
            <div class="container py-md">
                <div class="row">
                    <div class="col-lg-5 ml-lg-auto">
                        <div class="text-center text-lg-left">
                            <h2 class="heading h1 mb-3">Your next big idea</h2>
                            <p class="lead lh-180">Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
                            <a href="#" class="btn btn-primary btn-circle mt-4">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative pb-lg-lg pt-lg-xl bg-dark">
            <div class="bg-img-holder top-0 right-0 col-lg-6 zindex-100" data-bg-size="cover" style="background-image: url(&quot;../assets/img/prv/team-1-800x800.jpg&quot;); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
                <img alt="Image placeholder" src="../assets/img/prv/team-1-800x800.jpg">
            </div>
            <div class="container py-md">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-center text-lg-left">
                            <h2 class="heading h1 text-white mb-3">Unleash your creativity</h2>
                            <p class="lead lh-180 text-white">Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
                            <a href="#" class="btn btn-white btn-circle mt-4">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</main>



@include('inc.footer')
@endsection