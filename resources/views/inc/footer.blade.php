   


  @php $routename = Route::currentRouteName(); @endphp
   <footer class="footer footer-dark bg-gradient-primary @if($routename == 'home')footer-rotate @endif">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="/">
                        <img src="assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                    </a>
                    <p class="text-sm">RENOVA8 is a registered renovations &amp; design company, located in the heart of Yaba with a commitment to redefining the culture of property renovations and remodeling.</p>
                </div>
                <div class="col-lg-4 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Commercial Renovation</a>
                        </li>
                        <li><a href="#">Residential Renovation</a>
                        </li>
                        <li><a href="#">Architectural Designs</a>
                        </li>
                        <li><a href="#">Project Management & Quality Assurance</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Portfolio</a>
                        </li>
                    </ul>
                </div>
               
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 20{{date('y')}} <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Renova8</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com/webpixels" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>