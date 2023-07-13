<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class proiductcontroller extends Controller
{
    function index(){
        $data =  Product::all();
        return view('product', ['products'=>$data]);
    }
    function detail($id){
        $data =  Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req){
      $data = Product::where('name','like','%'. $req->input('query').'%')->get();
      return view('search',['products'=>$data]);
    }

    function addtocart(Request $req){
        
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    function cartitem(){
        $user_id = Session::get('user')['id']; 
        return Cart::where('user_id', $user_id)->count();
    }
    function cartlist(){
        $user_id = Session::get('user')['id'];
        $data =  DB::table('cart')->join('products','cart.product_id', 'products.id')->
        select('products.*','cart.id as cart_id')->where('cart.user_id', $user_id)->get();
        return view('cartlist', ['products'=> $data]);
    }

    function removecart($id){        
        echo Cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow(){
        $user_id = Session::get('user')['id'];
        $data =  DB::table('cart')->join('products','cart.product_id', 'products.id')->
        select('products.*','cart.id as cart_id')
        ->where('cart.user_id', $user_id)->sum('products.price');
        return view('ordernow', ['total' => $data]);
    }
    function orderplace(Request $req){
        $user_id = Session::get('user')['id'];
        $allcartdata = Cart::where('user_id',$user_id)->get();
        foreach ($allcartdata as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id',$user_id)->delete();
        return redirect('/');
    }
    function myorder()
    {
        $user_id = Session::get('user')['id'];
        $orders =  DB::table('orders')
        ->join('products','orders.product_id', 'products.id')
        ->where('orders.user_id', $user_id)->get();
        return view('myorder', ['orders'=> $orders]);
    }

}
