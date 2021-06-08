<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Orderdetails;
use App\Http\Controllers\Orders;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow/{id}",[ProductController::class,'orderNow']);
Route::get("orderMany",[ProductController::class,'orderMany']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::post("orderManyPlace",[ProductController::class,'orderManyPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("dashboard",[DashboardController::class,'dashboard']);
Route::get("orders/{id}",[Orders::class,'orders']);
Route::view('/addReview','addReview');
Route::post("/addReview",[ReviewController::class,'addReview']);
Route::get("/addProduct",[ProductController::class,'addProduct']);
Route::post("/saveProduct",[ProductController::class,'saveProduct']);