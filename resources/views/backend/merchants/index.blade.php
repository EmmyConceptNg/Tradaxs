@extends('backend.layouts.app')
@section('content')
<div class="col-sm-12 mx-auto">
    <div class="content-body col-9 col-sm-11 p-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card border-0">
                        <div class="card-title rounded rounded-top rounded-lg bg-dark">
                            <h4 class="text-center text-white p-2">Select From Our List of Vendors</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                    <table id="trade" class="table table-hover table-sm table-striped p-2">
                                        <thead class="text-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Currencies</th>
                                                <th scope="col"></th>
                                                <th scope=" "></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Kolawole Emmanuel</td>
                                                <td>BNB, BTC, TRX</td>
                                                <td class="text-primary">Available</td>
                                                <td>
                                                    <form action="{{ route('checkout') }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm"> Checkout <i class="la la-arrow-right text-light"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Oluwasegun Emmanuel</td>
                                                <td>XVG, SWIPE</td>
                                                <td class="text-secondary">Unavailable</td>
                                                <td>
                                                    <form action="{{ route('checkout') }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm"> Checkout <i class="la la-arrow-right text-light"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Shola Kingsley</td>
                                                <td>BNB, XVG</td>
                                                <td class="text-primary">Available</td>
                                                <td>
                                                    <form action="{{ route('checkout') }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm"> Checkout <i class="la la-arrow-right text-light"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="text-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Currencies</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
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
