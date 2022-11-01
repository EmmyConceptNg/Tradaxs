<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tradaxs</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
                <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/price">Price</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/wallet">Wallet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/about">About</a>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/team">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="/blog">Blog</a>
                                        </li>
                                        {{-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Company
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="about.html">About us</a>
                                                <a class="dropdown-item" href="team.html">Team</a>
                                                <a class="dropdown-item" href="blog.html">Blog</a>
                                                <a class="dropdown-item" href="career.html">Career</a>
                                            </div>
                                        </li> --}}
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-primary" href="#" data-toggle="dropdown">Support
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item text-primary" href="/contact">Contact us</a>
                                                <a class="dropdown-item text-primary" href="/helpdesk">Help Desk</a>
                                                <a class="dropdown-item text-primary" href="/faq">FAQ</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                             @if (Route::has('login'))
                                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                    @auth
                                                        <a class="nav-link text-primary" href="/dashboard">Dashboard</a>
                                                    @else
                                                    <a class="nav-link text-primary" href="/dashboard">Dashboard</a>
                                                    @endauth
                                                </div>
                                            @endif


                                        </li>

                                    </ul>
                                </div>

                                <div class="signin-btn">
                                    <a class="btn btn-dark" href="{{ route('login') }}">Sign in</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @yield('content')
        <div class="bottom section-padding intro2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="bottom-logo">
                            <img class="pb-3" src="images/logo-white.png" alt="">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Our Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li><a href="#">Ticket</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Helpdesk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Exchange Pair</h4>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">ETH to BTC</a></li>
                                        <li><a href="#">BTC to ETH</a></li>
                                        <li><a href="#">LTC to ETH</a></li>
                                        <li><a href="#">USDT to BTC</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">BTC to USDT</a></li>
                                        <li><a href="#">LTC to BTC</a></li>
                                        <li><a href="#">XMR to BTC</a></li>
                                        <li><a href="#">ETC to DASH</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="copyright">
                            <p>© Copyright
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script>
                                <a href="#">Tradaxs</a> | All Rights Reserved |
                                Designed by <a href="#">EmmyConcept</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap5.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl-carousel-init.js') }}"></script>

    <script src="{{ asset('vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/apexchart/apexchart-init.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>



</html>

