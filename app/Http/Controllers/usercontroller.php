<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    // || !Hash::check($user->passward, $req->passward)
    function login(Request $req){
        $user =  User::where(['email'=> $req->email])->first();
        if ($user && Hash::check($req->passward, $user->passward)){
            return 'email or passward does not match';
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
            
        }

           //    if($user || Hash::check($req->passward, $user->passward)){
    //     return "user email and pasward is not matched";
    //    }
    //    else{
    //     $req->session()->put('user', $user);
    //     return redirect('/');
    //    }
    }   
}
