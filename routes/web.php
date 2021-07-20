<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home/{user_name}",function($username){
    return view("home");
});

//--session
Route::get("/session_test",function(){
    request()->session()->put("a","kuyyyyyyyyyyyyyyyyyyyyy");
    echo  print_r(request()->session());
    return response(view("home"));
});

//--middleware
Route::get("/test_mid",function(){
    return "you're not THEWIN!!!";
})->middleware(\App\Http\Middleware\test_mid::class);

//--Controller
Route::get("/test_controller",[\App\Http\Controllers\UserController::class,"index"]);

//--JSON
Route::get("/test_send",function(){
    return json_encode(["name"=>"Thewin"]);
});
