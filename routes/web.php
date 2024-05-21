<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/",function(){ 
//     echo "Hello World!"; });
// Route::get("home", function(){ 
//     return "Home"; });
// Route::get("welcome", function(){
//     return view("welcome");});

// Route::get('user',[UserController::class,'index']);
// Route::get("/user/1",[UserController::class,"show"]);
// Route::get("user/{id}/edit",[UserController::class,"edit"]);
// Route::get("user/list/{page?}",[UserController::class,"list"]);

Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('/san-pham',[ProductController::class,"index"])->name('site.product');
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,"product_detail"])->name('site.product.detail');
Route::get('/lien-he',[ContactController::class,"index"])->name('site.contact');