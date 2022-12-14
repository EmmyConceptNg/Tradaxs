@extends('backend.layouts.app')
@section('content')
    <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card profile_card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img class="me-3 rounded-circle me-0 me-sm-3" src="{{ asset('images/profile/2.png') }}" width="60"
                                        height="60" alt="">
                                    <div class="flex-grow-1">
                                        <span>Hello</span>
                                        <h4 class="mb-2">{{ Str::upper($user->firstname) . ', ' . Str::ucfirst($user->lastname . ' ' . Str::ucfirst($user->middlename)) }}</h4>
                                        <p class="mb-1"> <span><i class="fa fa-phone me-2 text-primary"></i></span> {{ $user->phone }}</p>
                                        <p class="mb-1"> <span><i class="fa fa-envelope me-2 text-primary"></i></span>
                                            <a href="#" class="__cf_email__" >{{ $user->email }}</a>
                                        </p>
                                    </div>
                                </div>

                                <ul class="card-profile__info">
                                    <li>
                                        <h5 class="me-4">Address</h5>
                                        <span class="text-muted">{{ $user->address }}</span>
                                    </li>
                                    <li class="mb-1">
                                        <h5 class="me-4">Total Log</h5>
                                        <span>103 Time (Today 5 Times)</span>
                                    </li>
                                    <li>
                                        <h5 class="text-danger me-4">Last Log</h5>
                                        <span class="text-danger">3 February,
                                            <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                                var CurrentYear = new Date().getFullYear()
                                                document.write(CurrentYear)
                                            </script>, 10:00 PM
                                        </span>
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a class="facebook text-center" href="javascript:void(0)"><span><i
                                                class="fa fa-facebook"></i></span></a>
                                    <a class="twitter text-center" href="javascript:void(0)"><span><i
                                                class="fa fa-twitter"></i></span></a>
                                    <a class="youtube text-center" href="javascript:void(0)"><span><i
                                                class="fa fa-youtube"></i></span></a>
                                    <a class="googlePlus text-center" href="javascript:void(0)"><span><i
                                                class="fa fa-google"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card acc_balance">
                            <div class="card-header">
                                <h4 class="card-title">Wallet</h4>
                            </div>
                            <div class="card-body">
                                <span>Available BTC</span>
                                <h3>0.0230145 BTC</h3>

                                <div class="d-flex justify-content-between my-4">
                                    <div>
                                        <p class="mb-1">Buy this month</p>
                                        <h4>3.0215485 BTC</h4>
                                    </div>
                                    <div>
                                        <p class="mb-1">Sell this month</p>
                                        <h4>3.0215485 BTC</h4>
                                    </div>
                                </div>

                                <div class="btn-group mb-3">
                                    <button class="btn btn-primary">Sell</button>
                                    <button class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdraw</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"><i class="fa fa-money"></i></label>
                                            </div>
                                            <input type="text" class="form-control" placeholder="5000 USD">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"><i class="fa fa-bank"></i></label>
                                            </div>
                                            <select class="form-control">
                                                <option>Bank of America ********45845</option>
                                                <option>Master Card ***********5458</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100">Withdraw Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="card-title">All Activities</h4>
                            </div>
                            <div class="card-body pt-0">
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
                                                        <i class="cc BTC"></i> BTC
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
                                                        <i class="cc LTC"></i> LTC
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
                                                        <i class="cc XRP"></i> XRP
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
                                                        <i class="cc DASH"></i> DASH
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
                                                        <i class="cc BTC"></i> BTC
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
