@extends('layouts.master')
@section('contents')
@include('inc.nav')


    <main>







        <section class="slice bg-gradient-primary pb-250">
            <div class="container pt-xl">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="text-white">Have a project in mind?</h1>
                        <p class="lead text-white mt-4">We put all the experience and know-how in this product so we can offer you the best product we have ever built.</p>
                        <a href="#sct_contact_form" class="btn btn-secondary btn-circle btn-icon btn-translate--hover mt-4 scroll-me">
                            <span class="btn-inner--icon"><i class="far fa-pencil-alt"></i></span>
                            <span class="btn-inner--text">Write a message</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg pt-lg-5">
            <div class="container">
                <div class="row row-grid mt--200">
               
                    <div class="col-lg-6">
                        <div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0">
                            <a href="#" data-fancybox data-type="iframe" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.8888618501214!2d-73.97667638497174!3d40.7644690793262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f07d5da561%3A0x61f6aa300ba8339d!2sThe+Plaza!5e0!3m2!1sen!2sro!4v1524131511734">
                                <div class="card-img-bg" style="background-image: url('../assets/img/prv/city-2.jpg');"></div>
                                <span class="mask bg-gradient-dark opacity-9 opacity-8--hover"></span>
                                <div class="card-body px-5 py-5">
                                    <div style="min-height: 250px;">
                                        <h2 class="h2 text-white font-weight-bold mb-4">Lagos</h2>
                                        <h5 class="text-white mt-4 mb-2">E: info@renova8.com</h5>
                                        <h5 class="text-white">T: 09099889999</h5>
                                    </div>
                                    <span class="text-white text-uppercase font-weight-bold">
                                See on map
                                <i class="far fa-angle-right ml-2"></i>
                            </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sct_contact_form" class="slice slice-lg" data-delimiter-before="1">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-lg-6">
                        <h3>Contact us</h3>
                        <p class="lead">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
                        <form class="mt-5">
                            <div class="form-group">
                                <label class="sr-only">Your name</label>
                                <input class="form-control form-control-lg" placeholder="Your name" type="text">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Email address</label>
                                <input class="form-control form-control-lg" placeholder="Email address" type="text">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Type your message</label>
                                <textarea class="form-control form-control-lg textarea-autosize" rows="5" placeholder="Type your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-circle mt-4">Send message</button>
                        </form>
                    </div>

                    <div class="col-lg-5 ml-lg-auto">
                        <h3>150 Huges Avenue<br>Yaba Lagos, Nigeria</h3>
                        <p class="lead my-4">E: <a href="#">info@renova8.com</a>
                            <br>T: 09088998888</p>
                        <p>RENOVA8 is a registered renovations & design company, located in the heart of Yaba with a commitment to redefining the culture of property renovations and remodeling.</p>
                    </div>
                </div>
            </div>
        </section>

   


    </main>


@include('inc.footer')
@endsection