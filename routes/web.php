<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;



Route::get('/', function () {
    return view('home');

});
//Route::get('/business-login', [BusinessController::class,"businessLogin"])->name("businessLogin");
Route::match(["get","post"],"/business-login",[BusinessController::class,"businessLogin"])->name("businessLogin");


