<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubViewController extends Controller
{
   function index(){
    $footerTitle = "This is footer title";
    $headerTitle = "This is header title";
    return view('subviewexample', compact('footerTitle', 'headerTitle'));
   }
}
