<!DOCTYPE html>
<html lang="en">



<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tradaxs </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/waves/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap5.min.css">




    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}"  rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">


    {{-- <script src="{{ asset('/js/app.js') }}"></script>
<script>
Echo.channel('private-test')
    .listen('TestEvent', (e) => {
         console.log(e);
    })
</script> --}}
</head>

<body>


    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

<div id="main-wrapper" class="">

        <div class="header dashboard shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-dark  justify-content-between">
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>

                            <div class="dashboard_log my-2">
                                <div class="d-flex align-items-center">
                                    <div class="account_money">
                                        <ul>
                                            <li class="crypto">
                                                <span>0.0025</span>
                                                <i class="cc BTC"></i>
                                            </li>
                                            <li class="usd">
                                                <span>19.93 USD</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile_log dropdown">
                                        <div class="user" data-toggle="dropdown">
                                            <span class="thumb"><i class="la la-user"></i></span>
                                            <span class="name">{{ Str::ucfirst(Auth::user()->username) }}</span>
                                            <span class="arrow"><i class="la la-angle-down"></i></span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right float-left">
                                            <a href="/account" class="dropdown-item">
                                                <i class="la la-user"></i> Account
                                            </a>
                                            <a href="history.html" class="dropdown-item">
                                                <i class="la la-book"></i> History
                                            </a>
                                            <a href="{{ route('account.show', [Auth::user()->id]) }}" class="dropdown-item">
                                                <i class="la la-cog"></i> Setting
                                            </a>
                                            <a href="/lock" class="dropdown-item">
                                                <i class="la la-lock"></i> Lock
                                            </a>
                                            <a class="dropdown-item logout" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="la la-sign-out"></i> {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/dashboard" data-toggle="tooltip" data-placement="right" title="Home">
                            <span><i class="la la-igloo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="/wallet" data-toggle="tooltip" data-placement="right" title="Wallet">
                            <span><i class="la la-wallet"></i></span>
                        </a>
                    </li>

                    <li>
                        <a href="/learn-forex" data-toggle="tooltip" data-placement="right" title="Learn">
                            <span><i class="la la-line-chart"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="/buy" data-toggle="tooltip" data-placement="right" title="Buy">
                            <span><i class="la la-exchange"></i></span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="/trade" data-toggle="tooltip" data-placement="right" title="Sell">
                            <span><i class="la la-exchange"></i></span>
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a href="/users" data-toggle="tooltip" data-placement="right" title="Users">
                            <span><i class="la la-users"></i></span>
                        </a>
                    </li> --}}

                    <li>
                        <a href="/currencies" data-toggle="tooltip" data-placement="right" title="Currencies">
                            <span><i class="la la-bitcoin"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('account.show', [Auth::user()->id]) }}" data-toggle="tooltip" data-placement="right" title="Setting">
                            <span><i class="la la-tools"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-title dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-content">
                            <p>Welcome Back,
                                <span> {{ Str::ucfirst(Auth::user()->username) }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @yield('content')


<div class="footer dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-sm-12 col-md-12 mx-auto text-center">
                        <div class="copyright">
                            <p>&copy; Copyright
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script>
                                <a href="#">Tradaxs</a> | All Rights Reserved |
                                Designed By <a href="http://emmyconceptng.com">EmmyConcept</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 col-md-12 mx-auto">
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

    <script src="{{ asset('vendor/waves/waves.min.js') }}"></script>




    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr-init.js') }}"></script>

    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/circle-progress/circle-progress-init.js') }}"></script>


    <!--  flot-chart js -->
    <script src="{{ asset('vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/apexchart/apexchart-init.js') }}"></script>



    <script src="{{ asset('vendor/waves/waves.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui-init.js') }}"></script>
    <script src="{{ asset('vendor/validator/jquery.validate.js') }}"></script>
    <script src="{{ asset('vendor/validator/validator-init.js') }}"></script>



    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>





    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>



<script>

    $(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );

    $(document).ready(function() {
    var table = $('#trade').DataTable( {
        fixedHeader: true
    } );
} );

</script>


</body>

</html>
