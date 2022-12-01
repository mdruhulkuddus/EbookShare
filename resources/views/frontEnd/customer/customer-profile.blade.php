@extends('frontEnd.master')
@section('title')
    Profile
@endsection
@section('content')
    <section class="user-profile-page">
            <div class="row p-0-135 c-mr-0 gutters-sm ">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body profile-page-full">
                            <div class="d-flex flex-column align-items-center text-center">
{{--                                <img src=" {{ asset($customerInfo -> customer_image) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">--}}
                               <img src=" {{ asset($customerInfo -> customer_image) }}" alt="Admin" class="rounded-circle img-fluid img-thumbnail" >
                                <div class="mt-3">
                                    <h4 class="text-capitalize"> {{ $customerInfo -> customer_name }}</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                    </p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4">

                            <ul class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action "> <i class="fa-solid fa-book me-5"></i> Books </a>
                                <a href="{{ route('edit-customer-profile', ['id' => $customerInfo -> id]) }}" class="list-group-item list-group-item-action"><i class="fa fa-edit me-5"></i> Edit profile</a>
                                <a href="" class="list-group-item list-group-item-action"><i class="fa fa-heart me-5"></i>Wishlist</a>
                                <a href="{{ route('customer-logout') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-right-from-bracket me-5"></i>Sign Out</a>
                                <a href=""></a>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $customerInfo -> customer_name }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $customerInfo -> customer_email }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $customerInfo -> customer_phone }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $customerInfo -> address }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-outline-primary" href="{{ route('edit-customer-profile', ['id' => $customerInfo -> id]) }}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center mb-3">Enrolled Books</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="card border shadow-none radius-10">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table align-middle mb-0">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="orderlist">
                                                                        <a class="d-flex align-items-center gap-2" href="javascript:;">
                                                                            <div class="product-box">
                                                                                <img src="{{ asset('frontEndAsset/image/ebook1.jpg') }}" class=" img-fluid" alt="">
                                                                            </div>
                                                                            <div>
                                                                                <P class="mb-0 product-title">Rich dad poor dad</P>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="" class="btn btn-sm btn-outline-primary">Read Now</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="orderlist">
                                                                        <a class="d-flex align-items-center gap-2" href="javascript:;">
                                                                            <div class="product-box">
                                                                                <img src="{{ asset('frontEndAsset/image/ebook4.jpg') }}" class=" img-fluid" alt="">
                                                                            </div>
                                                                            <div>
                                                                                <P class="mb-0 product-title">360 days positivity</P>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="" class="btn btn-sm btn-outline-primary">Read Now</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="orderlist">
                                                                        <a class="d-flex align-items-center gap-2" href="javascript:;">
                                                                            <div class="product-box">
                                                                                <img src="{{ asset('frontEndAsset/image/ebook2.jpg') }}" class=" img-fluid" alt="">
                                                                            </div>
                                                                            <div>
                                                                                <P class="mb-0 product-title">You can do it!</P>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td><a href="" class="btn btn-sm btn-outline-primary">Read Now</a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--end row-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
