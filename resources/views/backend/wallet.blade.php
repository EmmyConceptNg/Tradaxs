@extends('backend.layouts.app')
@section('content')
 <div class="">
     <div class="content-body">
    <div class="container p-5 rounded col-9 col-sm-12">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mx-auto col-md-8">
                <div class="card border-0">
                    <div class="card-header bg-dark rounded-lg rounded-top">
                        <h4 class="card-title text-light">Wallet</h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div class="row align-items-center">
                            <div class="col-xl-4">
                                <div class="id_card">
                                    <img src="images/wallet.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-sm-12">
                                <div class="id_info p-5">
                                    <h3>{{ Str::upper($user->lastname). ', ' .Str::ucfirst($user->firstname). ' ' . Str::ucfirst($user->middlename) }} </h3>
                                    <p class="mb-1 mt-3">Virtual Wallet Address: <span class="text-danger">{{ $user->wallet->wallet_address }}</span> </p>
                                    <p class="mb-1">Your Wallet: <span class="font-weight-bold text-danger">{{ Str::ascii($user->wallet->amount) }} USD</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 mt-3 d-grid gap-2">
                                <button class="btn btn-primary rounded-lg rounded-pill" >Fund</button>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 mt-3 d-grid gap-2">
                                <button class="btn btn-warning rounded-lg rounded-pill" >Transfer</button>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 mt-3 d-grid gap-2">
                                <button class="btn  {{ ($user->wallet->amount > 0 ? 'btn-secondary' : 'disabled') }} rounded-lg rounded-pill" >Withdraw</button>
                            </div>
                        </div>
                        <div class="mt-5 col-lg-12 col-md-12 col-sm-12 col-xm-12 mt-3 d-grid gap-2">
                                <a href="{{ route('investment.index') }}" class="btn btn-success rounded-lg rounded-pill" >INVEST NOW</a>
                            </div>
                        <div class="table-responsive mt-5">
                            <table id="example" class="table table-hover table-sm table-striped p-2">
                                <thead class="text-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Method</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>04-11-2021</td>
                                        <td>500 USD</td>
                                        <td>Bank Transfer</td>
                                        <td><i class="la la-check-circle text-primary"></i> Verified</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>04-11-2021</td>
                                        <td>500 USD</td>
                                        <td>Bank Transfer</td>
                                        <td><i class="la la-check-circle text-primary"></i> Verified</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>04-11-2021</td>
                                        <td>500 USD</td>
                                        <td>Bank Transfer</td>
                                        <td><i class="la la-check-circle text-primary"></i> Verified</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>04-11-2021</td>
                                        <td>500 USD</td>
                                        <td>Bank Transfer</td>
                                        <td><i class="la la-check-circle text-primary"></i> Verified</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5 </th>
                                        <td>04-11-2021</td>
                                        <td>500 USD</td>
                                        <td>Bank Transfer</td>
                                        <td><i class="la la-check-circle text-primary"></i> Verified</td>
                                    </tr>
                                </tbody>
                                <tfoot class="text-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
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


