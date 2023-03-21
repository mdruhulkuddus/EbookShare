<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{
    public function goPayment(Request $request){
     //return $request;
       return view('frontEnd.payment.payment',[
           'total_price' => $request -> total_price,
        'user_id' => $request -> user_id,
       ]);
    }
    public function completePayment(Request $request){
//        return back()->with('message', 'Product added to cart');

//        return $request;
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->payable_amount = $request->payable_amount;
        $payment->account_number = $request->account_number;
        $payment->transaction_id = $request->transaction_id;
        $payment->payment_medium = $request->payment_medium;
        $payment->save();
        return redirect('/');
//        return back();

        //return $request;

    }
}
