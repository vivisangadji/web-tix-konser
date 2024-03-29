<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Home - {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- tobii css -->
        <link href="{{ asset('assets/css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}"/> 
        <!-- Main Css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <span class="logo-light-mode">
                        <img src="images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                </a>
                <!-- <div class="buy-button">
                    <a href="https://1.envato.market/4n73n" target="_blank">
                        <div class="btn btn-primary login-btn-primary">Buy Now</div>
                    </a>
                </div>end login button -->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                        <li><a href="index.html" class="sub-menu-item">About</a></li>
                        <li><a href="index.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-half-260 w-100 d-table" data-jarallax='{"speed": 0.5}' style="background: url('assets/images/event/event.jpg') center center;">
            <div class="bg-overlay bg-primary bg-gradient" style="opacity: 0.85;"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="title-heading">
                            <h1 class="display-4 title-dark text-white fw-bold mb-3">WebTIX</h1>
                            <p class="para-desc title-dark mx-auto text-light">Companies that work to organize concerts by domestic and foreign artists.</p>
                            
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="eventdown">
                                        <ul class="count-down list-unstyled">
                                            <li id="days" class="count-number list-inline-item px-4"></li>
                                            <li id="hours" class="count-number list-inline-item px-4"></li>
                                            <li id="mins" class="count-number list-inline-item px-4"></li>
                                            <li id="secs" class="count-number list-inline-item px-4"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('form.pesan.tiket') }}" class="btn btn-success mt-2 me-2"><i class="uil uil-ticket"></i> Buy Tickets</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <div class="text-center bg-white p-4">
                    <h3 class="text-dark mb-0">Next Event : </h3>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About START -->
        <section class="section border-top">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="container">
                <div class="card rounded shadow border-0 bg-light overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/images/event/b03.jpg') }}" class="img-fluid" alt="">
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card-body section-title p-md-5">
                                <h4 class="title mb-4">{{ $latesEvent->nama_tiket }}</h4>
                                <p class="text-muted para-desc mb-0">Harga Tiket: {{ rupiah($latesEvent->harga_tiket) }}</p>
                                <p class="text-muted para-desc mb-0">Tanggal: {{ Carbon\Carbon::parse($latesEvent->tanggal_konser)->isoFormat('dddd, D MMMM Y') }}</p>
                                <p class="text-muted para-desc mb-0">Pukul: {{ $latesEvent->jam }}</p>
                                <div class="mt-4 pt-2">
                                    <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Read More <i class="uil uil-angle-right-b"></i></a> -->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> WebTIX. Design with <i class="mdi mdi-heart text-danger"></i></p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{('assets/images/payments/american-ex.png')}}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{('assets/images/payments/discover.png')}}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{('assets/images/payments/master-card.png')}}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{('assets/images/payments/paypal.png')}}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{('assets/images/payments/visa.png')}}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

        <!-- javascript -->
        <script src="{{asset('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Parallax -->
        <script src="{{ asset('assets/js/parallax.js') }}"></script>
        <!-- tobii js -->
        <script src="{{ asset('assets/js/tobii.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('assets/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>