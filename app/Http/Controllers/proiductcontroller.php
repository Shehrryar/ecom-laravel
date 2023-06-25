<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Cart;
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
}
