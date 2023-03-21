@extends('frontEnd.master')
@section('title')
    Cart
@endsection
@section('content')
    <section class="shopping-cart">
        <div class="row p-0-135 c-mr-0 mt-3">
            <div class="px-4 px-lg-0 border">
            <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-1">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr class="border-0 bg-light">
                                    <th scope="col" >
                                        <div class="p-2 px-3 text-uppercase">Product</div>
                                    </th>
                                    <th scope="col">
                                        <div class="py-2 text-uppercase">Price</div>
                                    </th>
                                    <th scope="col" >
                                        <div class="py-2 text-uppercase">Remove</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @foreach($cartProducts as $product)
                                    @php
                                        $totalPrice += $product -> price;
                                    @endphp
                                    <tr>
                                        <th scope="row" class="border-0" style="width: 70%; ">
                                            <div class="p-2">
                                                <img src="{{ asset($product -> book_image) }}" alt="" width="70" class="img-fluid rounded shadow-sm" style="height: 80px">
                                                <div class=" d-inline-block align-middle">
                                                    <h5 class="mb-0"> <span class="text-dark d-inline-block align-middle mx-4">{{ $product -> book_title }} </span></h5><span class="mx-4 mt-2 text-muted font-weight-normal font-italic d-block">Author: {{ $product -> author_name }}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-0 align-middle"><strong>৳ {{ $product -> price }}</strong></td>
                                        <td class="border-0 align-middle"><a href="#" class="text-dark mx-3"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class="row p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light-pink rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                        <div class="p-4">
                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light-info rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>৳ {{ $totalPrice }}</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount</strong><strong>৳ 0.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">৳ {{ $totalPrice }}</h5>
                                </li>
                            </ul>
                            <form action="{{ route('payment') }}" method="post">
                                @csrf
                                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                                <input type="hidden" name="user_id" value="{{ $product -> user_id }}">
                            <button type="submit" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        </div>
    </section>

@endsection
