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
                            <p class="lead text-white lh-180">With over 10 years’ industry know-how and a large team of skilled Master Tradespeople and dedicated project managers, we make home renovations stress-free and easy</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary pb-lg-lg pt-lg-lg">
    <div class="container">
        <div class="mb-md text-center">
            <!-- <span class="badge badge-lg badge-success badge-pill">Our process</span> -->
            <h3 class="h3 mt-4">Company</h3>
            <div class="text-center mt-4">
                <p class="lead lh-180">RENOVA8 is a registered renovations &amp; design company, located in the heart of Yaba with a commitment to redefining the culture of property renovations and remodeling
                    We are an urban brand premised on variety, creativity and innovation – with a team of smart, young,
                    intelligent and forward-thinking artisans deeply rooted in the finer points of renovation and maintenance
                    services; breathing new life into your space is only a walk in the park.
                    Our renovation and maintenance services combine expertise, practical considerations of the physical
                    framework of spaces; clients&#39; needs and costs with a creative understanding of materials and aesthetics to
                give your spaces quality and reliable solutions that meet your desires.</p>
            </div>
        </div>
        <div class="row row-grid">
            <div class="col-lg-4">

                <div class="card shadow shadow-lg--hover" style="min-height: 492px">
                    <div class="py-5 text-center">
                        <div class="icon icon-xl icon-shape rounded-circle icon-teal">
                            <i class="far fa-file-archive"></i>
                        </div>
                    </div>
                    <div class="px-4 pb-5 text-center">
                        <h5 class="font-weight-bold">Vision</h5>
                        <p class="mt-2">To be the leading brand in renovation and home maintenance services.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

                <div class="card shadow shadow-lg--hover" style="min-height: 492px">
                    <div class="py-5 text-center">
                        <div class="icon icon-xl icon-shape rounded-circle icon-pink">
                            <i class="far fa-palette"></i>
                        </div>
                    </div>
                    <div class="px-4 pb-5 text-center">
                        <h5 class="font-weight-bold">Mission</h5>
                        <p class="mt-2">To deliver top quality services within a specified time frame, while exploring and employing modern innovations to meet customers’ preferences and satisfaction at flexible and cost-effective payment plans.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

                <div class="card shadow shadow-lg--hover" style="min-height: 492px">
                    <div class="py-5 text-center">
                        <div class="icon icon-xl icon-shape rounded-circle icon-yellow">
                            <i class="far fa-cogs"></i>
                        </div>
                    </div>
                    <div class="px-4 pb-5 text-center">
                        <h5 class="font-weight-bold">Our Strength</h5>
                        <p class="mt-2">Our team of experienced professionals and dedicated staff make for a formidable force in our industry. Our pedigree ranks amongst the highest in the business of home renovation. Our creative solutions and pricing techniques backed by technology are our hallmark, evident in our various undertaken projects.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="position-relative pb-lg-lg pt-lg-lg bg-secondary">
    <div class="bg-img-holder top-0 left-0 col-lg-6 zindex-100" data-bg-size="cover" style="background-image: url(&quot;../assets/img/prv/team-6-800x800.jpg&quot;); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
        <img alt="Image placeholder" src="{{asset('assets/img/brand/carpenter.png')}}">
    </div>
    <div class="container py-md">
        <div class="row">
            <div class="col-lg-5 ml-lg-auto">
                <div class="text-center text-lg-left">
                    <h2 class="heading h1 mb-3">HOW IT WORKS</h2>
                    <p class="lead lh-180">Our unique online tool gives you choice and clarity when it comes to home renovation costs. Starting with the room you want to renovate, you’ll be guided through a choice of top quality products based on your budget. A live running total updates as you move through your options. Play around and save your plans for later, or submit your ideas for a free consultation with one of our experts. </p>
                    <a href="#" class="btn btn-dark btn-circle mt-4">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative pb-lg-lg pt-lg-xl bg-dark">
    <div class="bg-img-holder top-0 right-0 col-lg-6 zindex-100" data-bg-size="cover" style="background-image: url(&quot;../assets/img/prv/team-1-800x800.jpg&quot;); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
        <img alt="Image placeholder" src="{{asset('assets/img/brand/kit.png')}}">
    </div>
    <div class="container py-md">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-center text-lg-left">
                    <h2 class="heading h1 text-white mb-3">WE ARE HOME RENO EXPERTS</h2>
                    <p class="lead lh-180 text-white">RENOVA8 is a registered renovations &amp; design company, located in the heart of Yaba with a commitment to redefining the culture of property renovations and remodeling
                        We are an urban brand premised on variety, creativity and innovation – with a team of smart, young,
                        intelligent and forward-thinking artisans deeply rooted in the finer points of renovation and maintenance
                    services; breathing new life into your space is only a walk in the park.</p>
                    <a href="#" class="btn btn-white btn-circle mt-4">See our range of services</a>
                </div>
            </div>
        </div>
    </div>
</section>


</main>



@include('inc.footer')
@endsection