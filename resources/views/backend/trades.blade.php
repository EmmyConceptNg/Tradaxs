@extends('backend.layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="card mx-auto col-lg-4 col-md-4 col-sm-12 border-0 rounded shadow">
                    <div class="card-title bg-primary">
                        <h4 class="text-center text-white p-2">SELL CRYPTO</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-xl-12 col-lg-12 col-12">
                        <div class="intro-form-exchange">
                        <form method="post" action="{{ route('merchants.store') }}" class="currency_validate">
                            @csrf
                            <div class="form-group">
                                <label class="me-sm-2">Select Currency</label>
                            <div class="form-group">
                                <select name="coin" id="" class="form-control">
                                    <option value="BNB">BNB</option>
                                    <option value="BTC">BTC</option>
                                    <option value="TRX">TRX</option>
                                </select>
                            </div>
                                <label class="me-sm-2 mt-2">Enter Amount</label>
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="d-grid gap-3">
                                    <button class="btn btn-outline-primary btn-lg">
                                        <div>
                                            <h3>
                                            Mastercard
                                        </h3>
                                        </div>
                                        <h6 class="text-danger">
                                            5158922xxxxx
                                        </h6>
                                        <h6>

                                        </h6>
                                    </button>
                                </div>
                            </div>

                            </div>
                            {{-- <button type="submit" name="submit" class="btn btn-primary w-100">
                                Buy Now
                                <i class="la la-arrow-right"></i>
                            </button> --}}

                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
