<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class CartController extends Controller
{

    public function addCart(Request $request){
        $cart = new Cart();
        $check = Cart::where('product_id', $request->produtID)->where('user_id', $request->userID)->first();
        if($check){
            return back()->with('message', 'Product already added to cart');;
        }
        else{
            $cart->user_id = $request->userID;
            $cart->product_id = $request->produtID;
            $cart->price = $request->price;
            $cart->save();
            return back()->with('message', 'Product added to cart');
        }
    }

    public function cartPage($id){
        $products = DB::table('carts')
            ->join('products','carts.product_id','products.id')
            ->join('authors','products.book_author_id','authors.id')
            ->select('carts.*', 'products.book_title', 'products.book_image', 'authors.author_name', )
            ->where('user_id', $id)
            ->orderby('carts.id','desc')
            ->get();

        return view('frontEnd.cart.cart', [
//            'cartProducts'=> Cart::where('user_id', $id)->latest()->get()
            'cartProducts'=> $products
        ]);
    }
}
