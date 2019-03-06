<header class="header-transparent" id="header-main">

        <!-- Search -->
        <div id="search-main" class="navbar-search">
            <div class="container">
                <!-- Search form -->
                <form class="navbar-search-form" role="form">
                    <div class="form-group">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="navbar-search-suggestions">
                    <h6>Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>iphone 8</span> in Smartphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>beats pro solo 3</span> in Headphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>smasung galaxy 10</span> in Phones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main navbar -->

  @php $routename = Route::currentRouteName(); @endphp
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="{{url('/')}}">
                    <img alt="Image placeholder" src="{{asset('assets/img/brand/white.png')}}" style="height: 75px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}" role="button">About</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <a class="nav-link" href="{{url('services')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                                <div class="list-group">
                                    <a href="{{url('services/commercial')}}" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{asset('assets/img/svg/recci.svg')}}" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Commercial Renovation</h6>
                                                <p class="mb-0">Our commercial renovation services cover interior and exterior.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('services/residential')}}" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{asset('assets/img/svg/comb.svg')}}" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Residential Renovation</h6>
                                                <p class="mb-0">We re-design, refashion your decor.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('services/architecture')}}" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{asset('assets/img/svg/plan.svg')}}" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Architectural Designs</h6>
                                                <p class="mb-0">minimally infuse interiors with ethnicity.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('services/projectmanagement')}}" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{asset('assets/img/svg/manage.svg')}}" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Project Management &amp; Quality Assurance</h6>
                                                <p class="mb-0">Project Management Done Right</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <!-- </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{url('product')}}" role="button">Products</a>
                        </li> -->
                           <li class="nav-item">
                            <a class="nav-link" href="{{url('portfolio')}}" role="button">Portfolio</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}" role="button">Contact</a>
                        </li>
                        
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                      
                        <li class="nav-item mr-0">
                            <a href="#" target="_blank" class="nav-link d-lg-none">Price Your Renovation</a>
                            <a href="#" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                <span class="btn-inner--text">Price Your Renovation</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>