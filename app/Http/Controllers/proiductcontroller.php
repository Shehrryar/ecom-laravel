<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;

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
}