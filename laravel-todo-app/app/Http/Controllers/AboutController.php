<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
   function index($username = null){
    return view('about', ['username' => $username]);
   }
    function AdminLogin(){

    // if(View::exists('admin.login')){
    //     return view('admin.login');
    // }   
    // return response('NO VIEW FOUND', 404);
    // }
    if(View::exists('admin.signin')){
        return view('admin.signin');
    }   
    return response('NO VIEW FOUND', 404);
    }
}

