@extends('backend.layouts.app')
@section('content')


        <div class="content-body">
        <div class="container -fluid">
            <div class="row">
                <div class="row mx-auto m-t-25">
                            <div class="col-sm-12 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>Trader Online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="col-xl-12 col-lg-12 col-xxl-12">
                    <div class="card shadow">
                        <div class="card-header border-0 rounded-top rounded-lg bg-primary text-center">
                            <h4 class="card-title text-light">Market Trend</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-6 col-xxl-6">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc BTC"></i></span>
                                                    <h5 class="d-inline-block ml-2 mb-3">Bitcoin <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge badge-success ml-2">+ 06%</span>
                                                </h4>
                                            </div>
                                            <div id="btcChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-xxl-6">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc ETH"></i></span>
                                                    <h5 class="d-inline-block ml-2 mb-3">Ethereum <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge badge-danger ml-2">- 06%</span>
                                                </h4>
                                            </div>
                                            <div id="ltcChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-xxl-6">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc LTC"></i></span>
                                                    <h5 class="d-inline-block ml-2 mb-3">Litecoin <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge badge-primary ml-2"> 06%</span>
                                                </h4>
                                            </div>
                                            <div id="xrpChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-xxl-6">
                                    <div class="widget-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="widget-stat">
                                                <div class="coin-title">
                                                    <span><i class="cc XRP"></i></span>
                                                    <h5 class="d-inline-block ml-2 mb-3">Ripple <span>(24h)</span>
                                                    </h5>
                                                </div>
                                                <h4>USD 1254.36 <span class="badge badge-danger ml-2">- 06%</span>
                                                </h4>
                                            </div>
                                            <div id="dashChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-xxl-4">
                    <div class="card shadow rounded">
                        <div class="card-header border-0 rounded-top rounded-lg bg-primary text-center">
                            <h4 class="card-title text-light">Exchange</h4>
                        </div>
                        <div class="card-body">
                            <div class="buy-sell-widget">
                                <form method="post" name="myform" class="currency_validate">
                                    <div class="form-group">
                                        <label class="me-sm-2">Currency</label>
                                        <div class="input-group mb-3">
                                            <select name='currency' class="form-control">
                                                <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                            </select>
                                            <input type="text" name="usd_amount" class="form-control"
                                                value="125.00 USD">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="me-sm-2">Payment Method</label>
                                        <div class="input-group mb-3">
                                            <select name='currency' class="form-control">
                                                <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                            </select>
                                            <input type="text" name="usd_amount" class="form-control"
                                                value="125.00 USD">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="me-sm-2">Enter your amount</label>
                                        <div class="input-group">
                                            <input type="text" name="currency_amount" class="form-control"
                                                placeholder="0.0214 BTC">
                                            <input type="text" name="usd_amount" class="form-control"
                                                placeholder="125.00 USD">
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <p class="mb-0">Monthly Limit</p>
                                            <h6 class="mb-0">$49750 remaining</h6>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                                        Now</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-xxl-8">
                    <div class="card shadow rounded">
                        <div class="card-header border-0 rounded-top rounded-lg bg-primary text-center">
                            <h4 class="card-title text-light">Recent Activities</h4>
                            <a href="#">View More </a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-responsive-sm">
                                        <tbody>
                                            <tr>
                                                <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">Sold</span>
                                                </td>
                                                <td>
                                                    <i class="cc BTC"></i> Bitcoin
                                                </td>
                                                <td>
                                                    Using - Bank *******5264
                                                </td>
                                                <td class="text-danger">-0.000242 BTC</td>
                                                <td>-0.125 USD</td>
                                            </tr>
                                            <tr>
                                                <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Buy</span>
                                                </td>
                                                <td>
                                                    <i class="cc LTC"></i> Litecoin
                                                </td>
                                                <td>
                                                    Using - Card *******8475
                                                </td>
                                                <td class="text-success">-0.000242 BTC</td>
                                                <td>-0.125 USD</td>
                                            </tr>
                                            <tr>
                                                <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Sold</span>
                                                </td>
                                                <td>
                                                    <i class="cc XRP"></i> Ripple
                                                </td>
                                                <td>
                                                    Using - Card *******8475
                                                </td>
                                                <td class="text-danger">-0.000242 BTC</td>
                                                <td>-0.125 USD</td>
                                            </tr>
                                            <tr>
                                                <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Buy</span>
                                                </td>
                                                <td>
                                                    <i class="cc DASH"></i> Dash
                                                </td>
                                                <td>
                                                    Using - Card *******2321
                                                </td>
                                                <td class="text-success">-0.000242 BTC</td>
                                                <td>-0.125 USD</td>
                                            </tr>
                                            <tr>
                                                <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Sold</span>
                                                </td>
                                                <td>
                                                    <i class="cc BTC"></i> Bitcoin
                                                </td>
                                                <td>
                                                    Using - Card *******2321
                                                </td>
                                                <td class="text-danger">-0.000242 BTC</td>
                                                <td>-0.125 USD</td>
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
