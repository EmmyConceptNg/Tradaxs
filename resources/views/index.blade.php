@extends('layouts.home')
@section('content')
        <div class="intro2" id="intro2">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-xl-12 col-lg-12 col-12 mt-5 bg-transparent mx-auto intro-form-exchange text-light text-center">

                        <div id="carouselExampleSlidesOnly" class="carousel slide shadow" data-bs-ride="carousel">
                            <div class="carousel-inner p-4">
                                <div class="carousel-item active intro-content">
                                    <h1 class="text-light">Trade with <strong class="text-warning">Tradaxs</strong>. <br> Buy and sell cryptocurrency </h1>
                                    <p>Fast and secure way to purchase or exchange 150+ cryptocurrencies</p>
                                </div>
                                <div class="carousel-item intro-content">
                                    <h1 class="text-light"><strong class="text-warning">Need help to start trading?</strong>. </h1>
                                    <p>Build your skills with Tradaxs free educational resources.</p>
                                </div>
                            </div>
                            <div class="intro-btn p-4">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ route('register') }}" class="btn btn-warning text-light"><strong>Get Started</strong></a>
                                        @else
                                        <a href="{{ route('register') }}" class="btn btn-warning text-light"><strong>Get Started</strong></a>
                                        @endauth
                                        <a href="#" class="btn btn-outline-light">Browse Now</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price-grid section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc BTC"></i></span>
                                    <div class="flex-grow-1">
                                        Bitcoin
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="btcChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc LTC"></i></span>
                                    <div class="flex-grow-1">
                                        Litecoin
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="ltcChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc DASH"></i></span>
                                    <div class="flex-grow-1">
                                        Dashcoin
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="dashChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc XRP"></i></span>
                                    <div class="flex-grow-1">
                                        Ripple
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="xrpChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc ETH"></i></span>
                                    <div class="flex-grow-1">
                                        Ethereum
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="ethChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc USDT"></i></span>
                                    <div class="flex-grow-1">
                                        Tether
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="usdtChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc EOS"></i></span>
                                    <div class="flex-grow-1">
                                        Eosio
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="eosChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <span><i class="cc XTZ"></i></span>
                                    <div class="flex-grow-1">
                                        Tezos
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD 62,548.2254</h3>
                                <span class="text-success">+2.05%</span>
                                <div id="xtzChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="getstart intro2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title">
                            <h2 class="text-white" >Get started in a few minutes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <span><i class="la la-user-plus"></i></span>
                            <h3 class="text-white">Create an account</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <span><i class="la la-bank"></i></span>
                            <h3 class="text-white">Link your bank account</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <span><i class="la la-exchange"></i></span>
                            <h3 class="text-white">Start buying & selling</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <h2>Create your cryptocurrency portfolio today</h2>
                            <p>Tradaxs has a variety of features that make it the best place to start trading</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="portfolio_list">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="d-flex">
                                        <span class="port-icon"> <i class="la la-bar-chart"></i></span>
                                        <div class="flex-grow-1">
                                            <h4>Manage your portfolio</h4>
                                            <p>Buy and sell popular digital currencies, keep track of them in the one
                                                place.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex">
                                        <span class="port-icon"> <i class="la la-calendar-check-o"></i></span>
                                        <div class="flex-grow-1">
                                            <h4>Recurring buys</h4>
                                            <p>Invest in cryptocurrency slowly over time by scheduling buys daily,
                                                weekly,
                                                or monthly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex">
                                        <span class="port-icon"> <i class="la la-lock"></i></span>
                                        <div class="flex-grow-1">
                                            <h4>Vault protection</h4>
                                            <p>For added security, store your funds in a vault with time delayed
                                                withdrawals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex">
                                        <span class="port-icon"> <i class="la la-mobile"></i></span>
                                        <div class="flex-grow-1">
                                            <h4>Mobile apps</h4>
                                            <p>Stay on top of the markets with the Tradaxs app for <a
                                                    href="#">Android</a>
                                                or
                                                <a href="#">iOS</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="portfolio_img">
                            <img src="images/portfolio.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trade-app intro2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="text-white">Trade. Anywhere</h2>
                            <p> All of our products are ready to go, easy to use and offer great value to any kind of
                                business
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body">
                                <span><i class="la la-mobile"></i></span>
                                <h4 class="card-title text-white">Mobile</h4>
                                <p>All the power of Tradaxs's cryptocurrency exchange, in the palm of your hand. Download
                                    the
                                    Tradaxs mobile crypto trading app today</p>

                                <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body">
                                <span><i class="la la-desktop"></i></span>
                                <h4 class="card-title text-white">Desktop</h4>
                                <p>Powerful crypto trading platform for those who mean business. The Tradaxs crypto
                                    trading
                                    experience, tailor-made for your Windows or MacOS device.</p>

                                <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body">
                                <span><i class="la la-connectdevelop"></i></span>
                                <h4 class="card-title text-white">API</h4>
                                <p>The Tradaxs API is designed to provide an easy and efficient way to integrate your
                                    trading
                                    application into our platform.</p>

                                <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-xl-12">
                        <div class="trusted-business py-5 text-center">
                            <h3 class="text-white">Trusted by Our <strong class="text-white">Partners & Investors</strong></h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="trusted-logo">
                                    <a href="#"><img class="img-fluid" src="images/brand/1.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="trusted-logo">
                                    <a href="#"><img class="img-fluid" src="images/brand/2.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="trusted-logo">
                                    <a href="#"><img class="img-fluid" src="images/brand/3.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="trusted-logo">
                                    <a href="#"><img class="img-fluid" src="images/brand/4.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="trusted-logo">
                                    <a href="#"><img class="img-fluid" src="images/brand/5.webp" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="testimonial section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h2>What our customer says</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="testimonial-content">
                            <div class="testimonial1 owl-carousel owl-theme">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="images/testimonial/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-review">
                                            <img class="img-fluid" src="images/brand/2.webp" alt="">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi voluptas
                                                dignissimos similique quas molestiae doloribus recusandae voluptatem et
                                                repudiandae veritatis.</p>
                                            <div class="customer-info">
                                                <h6>Mr John Doe</h6>
                                                <p>CEO, Example Company</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="images/testimonial/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-review">
                                            <img class="img-fluid" src="images/brand/3.webp" alt="">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi voluptas
                                                dignissimos similique quas molestiae doloribus recusandae voluptatem et
                                                repudiandae veritatis.</p>
                                            <div class="customer-info">
                                                <h6>Mr Abraham</h6>
                                                <p>CEO, Example Company</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center">
                            <h2>The most trusted cryptocurrency platform</h2>
                            <p> Here are a few reasons why you should choose Tradaxs
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center py-5">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/protect.svg" alt="">
                            </div>
                            <h3>Secure storage </h3>
                            <p>We store the vast majority of the digital assets in secure offline storage.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/cyber.svg" alt="">
                            </div>
                            <h3>Protected by insurance</h3>
                            <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/finance.svg" alt="">
                            </div>
                            <h3>Industry best practices</h3>
                            <p>Tradaxs supports a variety of the most popular digital currencies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="appss section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="appss-content">
                            <h2>The secure app to store crypto yourself</h2>
                            <ul>
                                <li><i class="la la-check"></i> All your digital assets in one place</li>
                                <li><i class="la la-check"></i> Use Decentralized Apps</li>
                                <li><i class="la la-check"></i> Pay friends, not addresses</li>
                            </ul>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary my-1 waves-effect">
                                    <img src="images/android.svg" alt="">
                                </a>
                                <a href="#" class="btn btn-primary my-1 waves-effect">
                                    <img src="images/apple.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="appss-img">
                            <img class="img-fluid" src="images/app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog section-padding intro2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="text-white">Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="images/blog/1.jpg" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">Why does Litecoin need MimbleWimble?</h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                        of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="images/avatar/5.jpg" alt=""> Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            <script>
                                                var CurrentYear = new Date().getFullYear()
                                                document.write(CurrentYear)
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="images/blog/2.jpg" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">How to securely store your HD wallet seeds?</h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                        of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="images/avatar/6.jpg" alt=""> Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            <script>
                                                var CurrentYear = new Date().getFullYear()
                                                document.write(CurrentYear)
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="images/blog/3.jpg" alt="">
                                <div class="card-body">
                                    <a href="blog-single.html">
                                        <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin</h4>
                                    </a>
                                    <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                        of
                                        old tosh baking cakes.!</p>
                                </div>
                                <div class="card-footer">
                                    <div class="meta-info">
                                        <a href="#" class="author"><img src="images/avatar/7.jpg" alt=""> Admin</a>
                                        <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July,
                                            <script>
                                                var CurrentYear = new Date().getFullYear()
                                                document.write(CurrentYear)
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="get-touch section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h2>Get in touch. Stay in touch.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="d-flex">
                                <span><i class="fa fa-shield"></i></span>
                                <div class="flex-grow-1">
                                    <h4>24 / 7 Support</h4>
                                    <p>Got a problem? Just get in touch. Our support team is available 24/7.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="d-flex">
                                <span><i class="fa fa-cubes"></i></span>
                                <div class="flex-grow-1">
                                    <h4>Tradaxs Blog</h4>
                                    <p>News and updates from the world’s leading cryptocurrency exchange.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="d-flex">
                                <span><i class="fa fa-certificate"></i></span>
                                <div class="flex-grow-1">
                                    <h4>Careers</h4>
                                    <p>Help build the future of technology. Start your new career at Tradaxs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="d-flex">
                                <span><i class="fa fa-life-ring"></i></span>
                                <div class="flex-grow-1">
                                    <h4>Community</h4>
                                    <p>Tradaxs is global. Join the discussion in our worldwide communities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       @endsection
