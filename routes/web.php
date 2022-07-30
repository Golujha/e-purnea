<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,BusinessController,AuthController};


Route::get("/",[HomeController::class,"homepage"])->name("homepage");
Route::get("/category/{cat_id?}",[HomeController::class,"category"])->name("category");

Route::get("view/{id}",[HomeController::class,"viewBiz"])->name("viewBiz");
Route::get("/search",[HomeController::class,"search"])->name("search");



Route::resource('business', BusinessController::class);

Route::middleware('auth')->group(function () {
Route::get("/add-business",[HomeController::class,"add_biz"])->name("add.biz");
   
});


//authcontroller routes
Route::controller(AuthController::class)->group(function () {
    Route::match(["get","post"],'/login', 'login')->name('login');
    Route::match(["get","post"],'/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});








