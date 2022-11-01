@extends('backend.layouts.app')
@section('content')
    <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="card settings_menu">
                            <div class="card-header">
                                <h4 class="card-title">Settings</h4>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="nav-item">
                                        <a href="settings.html" class="nav-link">
                                            <i class="la la-user"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="settings-preferences.html" class="nav-link">
                                            <i class="la la-cog"></i>
                                            <span>Preferences</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="settings-security.html" class="nav-link active">
                                            <i class="la la-lock"></i>
                                            <span>Security</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="settings-account.html" class="nav-link">
                                            <i class="la la-university"></i>
                                            <span>Linked Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Security</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-4">
                                        <div class="id_card">
                                            <img src="images/id.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="id_info">
                                            <h3>Maria Pascle </h3>
                                            <p class="mb-1 mt-3">ID: 0024 5687 2254 3698 </p>
                                            <p class="mb-1">Status: <span class="font-weight-bold">Verified</span></p>
                                            <a href="verify-step-2.html" class="btn btn-success mt-3">New ID</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="phone_verify">
                                            <h4 class="card-title mb-3">Email Address</h4>
                                            <form action="https://demo.quixlab.com/tradix-html/otp-2.html">
                                                <div class="row align-items-center">
                                                    <div class="form-group col-xl-6">
                                                        <input type="text" class="form-control"
                                                            placeholder="hello@example.com ">
                                                        <button class="btn btn-success mt-4">Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="phone_verified">
                                            <h5> <span><i class="fa fa-envelope"></i></span> <a href="https://demo.quixlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3159545d5d5e715449505c415d541f525e5c">[email&#160;protected]</a></h5>
                                            <div class="verify">
                                                <div class="verified">
                                                    <span><i class="la la-check"></i></span>
                                                    <a href="#">Verified</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="phone_verify">
                                            <h4 class="card-title mb-3">Add Phone Number</h4>
                                            <form action="https://demo.quixlab.com/tradix-html/otp-2.html">
                                                <div class="row align-items-center">
                                                    <div class="form-group col-xl-6">
                                                        <input type="text" class="form-control"
                                                            placeholder="+1 2335 2458 ">
                                                        <button class="btn btn-success mt-4">Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="phone_verified">
                                            <h5> <span><i class="fa fa-phone"></i></span> +1 23584 2659</h5>
                                            <div class="verify">
                                                <div class="verified">
                                                    <span><i class="la la-check"></i></span>
                                                    <a href="#">Verified</a>
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
        </div>
@endsection
