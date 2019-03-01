@extends('layouts.master')
@section('contents')
@include('inc.nav')
<main>
  <section class="section-rotate fadez">
    <div class="section-inner bg-gradient-primary"></div>
    <!--Illustation -->
    <div class="pt-5 position-absolute middle right-0 col-lg-7 col-xl-7 d-none d-lg-block">
        <img alt="" src="{{asset('archi.png')}}" class="img-fluid" style="animation: floating 3s ease infinite">
    </div>
    <!-- SVG shapes background -->

    <!-- Hero container -->
    <div class="container pt-lg pb-xl-md position-relative zindex-100">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-left">

                <div class="">
                    <h2 class="text-white my-5">
                     <span class="display-4 font-weight-light">WE MAKE HOME</span>
                     <span class="d-block">RENOVATIONS <strong class="font-weight-light">EASY</strong></span>
                 </h2>
                 <p class="lead text-white">With over 30 years’ home renovation experience we make the whole process easy. </p>
                 <p class="lead text-white">Use our online tool to price and customise your new bathroom, laundry or outdoor living area, or explore our packages for your new kitchen renovation.</p>
                 <div class="mt-5">
                    <a href="#sct_page_examples" class="btn btn-dark btn-circle btn-translate--hover btn-icon mr-sm-4 scroll-me">
                        <span class="btn-inner--text">Price Your Renovation</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="sct_page_examples" class="pb-lg-lg">
    <div class="container">

     <span class="d-block mb-5"><strong class="font-weight-light"><h2>SERVICES</h2></strong></span>
     <div class="row">
        <div class="col-lg-3 mb-5 mb-lg-0">
            <div data-animate-hover="1" data-toggle="hidden">
                <div class="card bg-gradient-primary animate-this">
                    <div class="py-5 text-center">
                        <img alt="Image placeholder" src="assets/img/svg/reci.svg" class="img-saturate" style="width: 100px;">
                    </div>
                    <div class="px-4 pb-5 text-center mx-h">
                        <a href="#" class="btn btn-sm btn-white btn-circle" style="text-transform: uppercase;">Commercial Renovation</a>
                        <p class="text-white mt-4">Our renovation services lead to delightful results. We fix problem areas in your home. We provide you with the features and aesthetic qualities that serve your needs and express your personality. Our renovations possess structural integrity. </p>
                    </div>
                    <div class="btn-container mt-5 mx-auto pb-50" style="padding-bottom: 30px">
                        <a href="#" target="_blank" class="btn btn-dark btn-circle btn-translate--hover px-4">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0">
            <div data-animate-hover="1" data-toggle="hidden">
                <div class="card shadow animate-this">
                    <div class="py-5 text-center">
                        <img alt="" src="assets/img/svg/coom.svg" class="img-saturate" style="width: 100px;">
                    </div>
                    <div class="px-4 pb-5 text-center mx-h">
                        <a href="#" class="btn btn-sm btn-dark btn-circle">RESIDENTIAL RENOVATION</a>
                        <p class="mt-4">Key to enjoying the summer months, a proper outdoor space lets you make the most of the warm, sunny weather. Whether you’re entertaining guests around the barbecue or simply lounging in the sun, we can help you revamp your space your way. </p>
                    </div>
                    <div class="btn-container mt-5 mx-auto pb-50" style="padding-bottom: 30px">
                        <a href="#" target="_blank" class="btn btn-dark btn-circle btn-translate--hover px-4">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0">
            <div data-animate-hover="1" data-toggle="hidden">
                <div class="card shadow animate-this">
                    <div class="py-5 text-center">
                        <img alt="" src="assets/img/svg/archi.svg" class="img-saturate" style="width: 100px;">
                    </div>
                    <div class="px-4 pb-5 text-center mx-h">
                        <a href="#" class="btn btn-sm btn-dark btn-circle" style="text-transform: uppercase;">Architectural Designs</a>
                        <p class="mt-4">Our range of capabilities allows us the freedom to provide diverse architectural solutions, to leverage innovative products and materials, and to include our clients’ visions to improve each project we touch.</p>
                    </div>
                    <div class="btn-container mt-5 mx-auto" style="padding-bottom: 30px">
                        <a href="#" target="_blank" class="btn btn-dark btn-circle btn-translate--hover px-4">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0">
            <div data-animate-hover="1" data-toggle="hidden">
                <div class="card shadow animate-this">
                    <div class="py-5 text-center">
                        <img alt="" src="assets/img/svg/mana.svg" class="img-saturate" style="width: 100px;">
                    </div>
                    <div class="px-4 pb-5 text-center mx-h">
                        <a href="#" style="text-transform: uppercase;" class="btn btn-sm btn-dark btn-circle">Project Management & <br> Quality Assurance</a>
                        <p class="mt-4">Remodeling your home is an involved experience!  There are a lot of important decisions you will need to make from the time you approve the initial drawings, to enjoying your finished project.  </p>
                    </div>
                    <div class="btn-container mt-5 mx-auto pb-50" style="padding-bottom: 30px">
                        <a href="#" target="_blank" class="btn btn-dark btn-circle btn-translate--hover px-4">Get a Quote</a>
                    </div>
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

<section class="slice slice-xl bg-gradient-primary has-floating-items" id="sct_call_to_action">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white strong-600">YOU CAN RELY ON OUR TEAM OF EXPERTS</h1>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8">
                        <p class="lead text-white">
                            Our renovation and maintenance services combine expertise, practical considerations of the physical
                            framework of spaces; clients&#39; needs and costs with a creative understanding of materials and aesthetics to give your spaces quality and reliable solutions that meet your desires.
                        </p>
                        <div class="btn-container mt-5">
                            <a href="#" target="_blank" class="btn btn-success btn-circle btn-translate--hover px-4">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container floating-items">
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/recci.svg" class="img-saturate" style="width: 50px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/comb.svg" class="img-saturate" style="width: 76px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/const.svg" class="img-saturate" style="width: 36px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/wash.svg" class="img-saturate" style="width: 76px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/manage.svg" class="img-saturate" style="width: 46px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="assets/img/svg/build.svg" class="img-saturate" style="width: 36px;">
        </div>
    </div>
</section>

<section class="slice slice-lg bg-secondary">



    <div class="container-fluid">

        <div class="row row-grid align-items-center justify-content-around">

            <div class="col-lg-5">
                <div class="img-back-shape">
                    <img alt="Image placeholder" src="{{asset('assets/img/brand/capenter.jpg')}}" class="img-center img-fluid">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="pr-md-4">
                    <h3 class="font-weight-light">Who we <strong class="font-weight-700">are</strong></h3>
                    <p class="lead mb-5">WE ARE HOME RENO EXPERTS</p>
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <!-- <div class="icon icon-shape icon-teal rounded-circle">
                                    <i class="fab fa-html5"></i>
                                </div> -->
                                <div class="icon-text pl-4">
                                    <h5 class="font-weight-bold">Vision</h5>
                                    <p class="mb-0">To be the leading brand in renovation and home maintenance services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0  mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                               <!--  <div class="icon icon-shape icon-green rounded-circle">
                                    <i class="fab fa-node-js"></i>
                                </div> -->
                                <div class="icon-text pl-4">
                                    <h5 class="font-weight-bold">Mission</h5>
                                    <p class="mb-0">To deliver top quality services within a specified time frame, while exploring and employing modern innovations to meet customers’ preferences and satisfaction at flexible and cost-effective payment plans.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="card shadow border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                               <!--  <div class="icon icon-shape icon-green rounded-circle">
                                    <i class="fab fa-node-js"></i>
                                </div> -->
                                <div class="icon-text pl-4">
                                    <h5 class="font-weight-bold">Our Strength</h5>
                                    <p class="mb-0">Our team of experienced professionals and dedicated staff make for a formidable force in our industry. Our pedigree ranks amongst the highest in the business of home renovation. Our creative solutions and pricing techniques backed by technology are our hallmark, evident in our various undertaken projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <div class="row justify-content-center mb-md">
            <div class="col-lg-8">
                <div class="media">
                    <img alt="Image placeholder" class="rounded-circle mr-4" src="../assets/img/prv/team-4-800x800.jpg" style="width: 80px;">
                    <div class="media-body">
                        <p class="lead">"The design process has been an awesome experience. We just had the meeting with your designers and I loved their ideas. Really impressed with their work and just wanted to say thank you. ."</p>
                        <span class="text-muted mt-4">Haruna Ahmadu — Landlord</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



@include('inc.addr')


</main>
@include('inc.footer')
@endsection