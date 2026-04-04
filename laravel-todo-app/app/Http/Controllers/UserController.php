<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
   {
       return "This is the user index page.";
   }
   function show($id)
   {
       return "This is the user page for user with ID: " . $id;
   }
   function create($username = null)
   {
       return view('user.create', compact('username'));
    //    return view('user.create', ['username' => $username]);
   }
   public function store(Request $request)
    {
            $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Save or process...
         return redirect()->back()->with('success', 'User saved!');
    }
}
