@extends('backend.layouts.app')
@section('content')
 <div class="">
     <div class="content-body">
    <div class="container p-5 rounded col-9 col-sm-12">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mx-auto col-md-8">
                <div class="card border-0">
                    <div class="card-header bg-dark rounded-lg rounded-top">
                        <h4 class="card-title text-light">Courses</h4>
                    </div>
                    <div class="card-body mx-auto">
                        <div class="row align-items-center">
                            <div class="alert alert-info">
                                You Haven't Applied for any Course!!! Select From the Courses Below and Make Payments to access Course
                            </div>

                            <div class="table table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>COURSE</th>
                                        <th>PRICE</th>
                                        <th>DURATION</th>
                                        <th></th>
                                    </thead>
                                    <tr>
                                        <td>
                                            FOREX
                                        </td>
                                        <td>
                                            #5,000
                                        </td>
                                        <td>
                                            3 WEEKS
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">
                                                SELECT TRAINIG
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CRYPTO
                                        </td>
                                        <td>
                                            #5,000
                                        </td>
                                        <td>
                                            4 WEEKS
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">
                                                SELECT TRAINIG
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </div>

@endsection


