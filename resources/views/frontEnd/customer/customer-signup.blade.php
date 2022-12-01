@extends('frontEnd.master')
@section('title')
    login
@endsection
@section('content')
    <!--start content-->
    <section class="authentication-login">
        <div class="authentication-card mt-5">
            <div class="card shadow rounded-0 border">
                <div class="row g-0">
                    <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                        <img src="{{ asset('frontEndAsset/image/login/auth-img-7.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title">Sign Up</h5>
                            <span>{{ session('message') }}</span>
                            <hr>
{{--                            <p class="card-text mb-3 login-label-text-op">See your growth and get consulting support!</p>--}}
                            <form class="form-body" action="{{ route('new-customer') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-2">
                                    <div class="col-12 ">
                                        <label for="inputName" class="form-label">Name</label>
                                        <div class="ms-auto position-relative">
                                            <input type="text" name="customer_name" class="form-control radius-30 ps-5 login-input" id="inputName" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                                        <div class="ms-auto position-relative">
                                            <input type="email" name="customer_email" class="form-control radius-30 ps-5 login-input" id="inputEmailAddress" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Phone</label>
                                        <div class="ms-auto position-relative">
                                            <input type="number" name="customer_phone" class="form-control radius-30 ps-5 login-input" id="inputEmailAddress" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                        <div class="ms-auto position-relative">
                                            <input type="password" name="password" class="form-control radius-30 ps-5 login-input" id="inputChoosePassword" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Image</label>
                                        <div class="ms-auto position-relative">
                                            <input type="file" name="customer_image" class="form-control radius-30 login-input" id="inputChoosePassword" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30 login-input">Register</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p class="mb-0 login-label-text-op">Already have an account? <a href="{{ route('customer-login') }}">Sign in here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end page main-->

@endsection
