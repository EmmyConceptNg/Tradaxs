@extends('backend.layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="card settings_menu p-2 shadow ">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-light">Settings</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="nav-item">
                                    <a href="{{ route('account.show', [$user->id]) }}" class="nav-link active">
                                        <i class="la la-user"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/settings-preferences" class="nav-link">
                                        <i class="la la-cog"></i>
                                        <span>Preferences</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/settings-security" class="nav-link">
                                        <i class="la la-lock"></i>
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/settings-account" class="nav-link">
                                        <i class="la la-university"></i>
                                        <span>Linked Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="card shadow border-0 p-2">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white">Linked Account or Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="form">
                                <ul class="linked_account">
                                    <li>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex">
                                                    <span class="me-3"><i class="la la-bank"></i></span>
                                                    <div class="flex-grow-1">
                                                        <h5 class="mt-0 mb-1">Bank of America</h5>
                                                        <p>Bank **************5421</p>
                                                    </div>
                                                    <div class="edit-option">
                                                        <a href="#"><i class="la la-eye"></i></a>
                                                        <a href="#"><i class="la la-edit"></i></a>
                                                        <a href="#"><i class="la la-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="verify">
                                                    <div class="verified">
                                                        <span><i class="la la-check"></i></span>
                                                        <a href="#">Verified</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex my-4">
                                                    <span class="me-3"><i class="la la-cc-mastercard"></i></span>
                                                    <div class="flex-grow-1">
                                                        <h5 class="mt-0 mb-1">Master Card</h5>
                                                        <p>Credit Card *********5478</p>
                                                    </div>
                                                    <div class="edit-option">
                                                        <a href="#"><i class="la la-eye"></i></a>
                                                        <a href="#"><i class="la la-edit"></i></a>
                                                        <a href="#"><i class="la la-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="verify">
                                                    <div class="verified">
                                                        <span><i class="la la-check"></i></span>
                                                        <a href="#">Verified</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex">
                                                    <span class="me-3"><i class="la la-credit-card"></i></span>
                                                    <div class="flex-grow-1">
                                                        <h5 class="mt-0 mb-1">Debit Card</h5>
                                                        <p>Prepaid Card *********5478</p>
                                                    </div>
                                                    <div class="edit-option">
                                                        <a href="#"><i class="la la-eye"></i></a>
                                                        <a href="#"><i class="la la-edit"></i></a>
                                                        <a href="#"><i class="la la-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="verify">
                                                    <div class="not-verify">
                                                        <span><i class="la la-close"></i></span>
                                                        <a href="#">Not verified</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="mt-5">
                                    <a href="verify-step-5.html" class="btn btn-primary px-4 me-3">Add Bank
                                        Account</a>
                                    <a href="verify-step-1.html" class="btn btn-success px-4">Add Debit
                                        Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
