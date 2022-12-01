<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;
use Session;
use Hash;
class CustomerController extends Controller
{
    public function customerLogin(){
        return view('frontEnd.customer.customer-login');
    }

    public function customerSignup(){
        return view('frontEnd.customer.customer-signup');
    }

    public function saveCustomer(Request $request){
        $customer = new Customer();
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_phone = $request->customer_phone;
        $customer->password =  bcrypt($request->password);
        if($request->file('customer_image')) {
            $customer->customer_image = $this->saveImage($request);
        }
        $customer->save();
        return back()->with('message', 'Registered Successfully');
    }

    private function saveImage($request){
        $this->image = $request->file('customer_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/upload/customer-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function customerLoginCheck(Request $request){
        $customerInfo = Customer::where('customer_email', $request->user_name)
            ->orWhere('customer_phone', $request->user_name)
            ->first();
        if($customerInfo){
            $db_password = $customerInfo->password;
            if(password_verify($request->user_password, $db_password)){
            Session::put('customerID', $customerInfo->id);
            Session::put('customerName', $customerInfo->customer_name);
            return redirect('/');
            }
            else{
                return back()->with('message', 'Please enter valid password');
            }
        }
        else{
            return back()->with('message', 'Please enter valid email or phone');
        }
    }
    public function customerLogout(){
        Session::forget('customerID');
        Session::forget('customerName');
        return redirect('/');
    }

    public function customerProfile($id){
        $customerInfo = Customer::find($id);
        return view('frontEnd.customer.customer-profile',[
            'customerInfo' => $customerInfo,
        ]);
    }
    public function editCustomerProfile($id){
        $customerInfo = Customer::find($id);
        $hash = Hash::make($customerInfo -> password);
        return view('frontEnd.customer.edit-customer-profile',[
            'customerInfo' => $customerInfo,
            'password' => $hash,
        ]);

    }
}
