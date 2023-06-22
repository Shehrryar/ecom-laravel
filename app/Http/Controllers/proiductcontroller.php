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
}
