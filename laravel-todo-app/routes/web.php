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
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show'])
    ->whereNumber('id');
Route::get('/users/create/{username?}', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');

