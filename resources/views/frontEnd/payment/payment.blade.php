@extends('frontEnd.master')
@section('title')
    Payment
@endsection
@section('content')
    <section class="payment-page">
        <div class="row p-0-135 c-mr-0  mt-0">
            @if(session('message'))
                <div class="alert alert-primary" role="alert">
                    {{session('message')}}
                </div>
            @endif
          <div class="container d-flex justify-content-center bg-light ">
              <form action="{{ route('makePayment') }}" method="post">
                  @csrf
                <div class="card p-4 mt-4 border payment-block">

                    <div class="d-flex justify-content-between align-items-center payment-g">
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <input type="hidden" name="payable_amount" value="{{ $total_price }}">
                        <h5 class="total-amount">Payable amount</h5>
                        <div class="amount-container"><span class="amount-text"><span class="dollar-sign">৳</span>{{ $total_price }}</span></div>
                    </div>
                    <div class="pt-2">
                        <label class="d-flex justify-content-between"> <span class="label-text label-text-cc-number">CARD OR ACCOUNT NUMBER</span></label>
                        <input type="tel" name="account_number" class="form-control credit-card-number" maxlength="19"  placeholder="Card number">
                    </div>
                    <div class="pt-2">
                        <label class="d-flex justify-content-between"> <span class="label-text label-text-cc-number">TRANSACTION ID</span></label>
                        <input type="tel" name="transaction_id" class="form-control credit-card-number" maxlength="19"  placeholder="Card number">
                    </div>
                    <div class="d-flex justify-content-between pt-3">
                        <select class="form-select credit-card-number" aria-label="Default select example" name="payment_medium">
                            <option selected>Payment Medium</option>
                            <option value="Bkash">Bkash</option>
                            <option value="Rocket">Rocket</option>
                            <option value="Nagad">Nagad</option>
                            <option value="Card">Card</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between pt-5 align-items-center">
                        <button type="button" class="btn btn-outline-primary ">Cancel</button>
                        <button type="submit" class="  payment-btn">Make Payment</button>
                    </div>

                </div>
              </form>
        </div>
        </div>
    </section>

@endsection
