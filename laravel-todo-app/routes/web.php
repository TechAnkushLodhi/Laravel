<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// this is a simple route that returns a view
// Route::view('/laravel-todo', 'Laraveltodo');
Route::get('/laravel-todo', function () {
    return view('Laraveltodo');
});

// This is a route with a parameter

// Route::get('/route-with-param/{name}', function ($name) {
//     echo "Welcome, " . $name . "!";
//     return view('routewithparam');
// });
Route::get('/route-with-param/{name}', function ($name) {
    return view('routewithparam', ['name'=>$name]);
});
// Route::get('/route-with-param/{name}', function ($name) {
//     return view('routewithparam', compact('name'));
// });

// This is an anchor route
Route::view('/anchor-route', 'anchor');

// This is a route that uses a controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show'])
    ->whereNumber('id');
Route::get('/users/create/{username?}', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// View Create & calling a view directly without a controller
// Route::view('/about', 'about');
// Route::get('/about/{username?}', function ($username = null) {
//     return view('about', ['username' => $username ?:'Guest']);
// });
// Route::get('/about', function(){
//     return view('about');
// });
Route::get("/about",[AboutController::class, 'index']);
Route::get("/about/{username}",[AboutController::class, 'index']);
Route::get("/admin",[AboutController::class, 'AdminLogin']);

// blade template example & diffence between blade & php template code
use App\Http\Controllers\BladeexampleController;
use App\Http\Controllers\SubViewController;
Route::get("/blade-example", [BladeexampleController::class, 'index']);

// // How to impliment subviews in blade template

// Route::get("/subview-example", function () {
//     return view('subviewexample');
// });
Route::get("/subview-example", [SubViewController::class, 'index']);

// component example
use App\Http\Controllers\ComponentExampleController;
Route::get("/component-example", [ComponentExampleController::class, 'index']);