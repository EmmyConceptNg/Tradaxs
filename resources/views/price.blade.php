@extends('layouts.home')
@section('content')



        <div class="pricing section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="coin-search">
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search Coin">
                                    <button class="btn btn-success">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="sort-view">
                            <div class="search-timeline">
                                <a href="#" class="active">1H</a>
                                <a href="#">24H</a>
                                <a href="#">1W</a>
                                <a href="#">1M</a>
                                <a href="#">1Y</a>
                            </div>
                            <div class="coin-view">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#grid-view">
                                            <i class="mdi mdi-view-grid"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#list-view">
                                            <i class="mdi mdi-view-sequential"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid-view">
                                <div class="price-grid">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex">
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
                                                    <div class="d-flex">
                                                        <span><i class="cc LTC"></i></span>
                                                        <div class="flex-grow-1">
                                                            Bitcoin
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
                                                    <div class="d-flex">
                                                        <span><i class="cc DASH"></i></span>
                                                        <div class="flex-grow-1">
                                                            Bitcoin
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
                                                    <div class="d-flex">
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
                                                    <div class="d-flex">
                                                        <span><i class="cc ETH"></i></span>
                                                        <div class="flex-grow-1">
                                                            Bitcoin
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
                                                    <div class="d-flex">
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
                                                    <div class="d-flex">
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
                                                    <div class="d-flex">
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
                            <div class="tab-pane fade" id="list-view">
                                <div class="market-table">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                    <th>Chart</th>
                                                    <th>Trade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc BTC"></i>
                                                        <span>Bitcoin <b>BTC</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc ETH"></i>
                                                        <span>Ethereum <b>ETH</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc BCH-alt"></i>
                                                        <span>Bitcoin Cash <b>BCH</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc LTC"></i>
                                                        <span>Litecoin <b>LTC</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">-0.47%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>1
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc BTC"></i>
                                                        <span>Bitcoin <b>BTC</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc ETH"></i>
                                                        <span>Ethereum <b>ETH</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc BCH-alt"></i>
                                                        <span>Bitcoin Cash <b>BCH</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-success">+1.13%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4
                                                    </td>
                                                    <td class="coin_icon">
                                                        <i class="cc LTC"></i>
                                                        <span>Litecoin <b>LTC</b></span>
                                                    </td>

                                                    <td>
                                                        USD 680,175.06
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">-0.47%</span>
                                                    </td>
                                                    <td> <span class="sparkline8"></span></td>
                                                    <td><a href="#" class="btn btn-success">Buy</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       @endsection
