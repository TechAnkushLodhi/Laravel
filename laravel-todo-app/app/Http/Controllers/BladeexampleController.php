<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeexampleController extends Controller
{
   function index(){
    $username = "John Doe";
    $customers=['Alice', 'Bob', 'Charlie', 'David', 'Eve'];
    return view('bladeexample', ['username' => $username, 'customers' => $customers]);
   }
}
