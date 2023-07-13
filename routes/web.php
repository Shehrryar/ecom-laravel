<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\proiductcontroller;
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

Route::get('login', function () {
    return view('login');
});
Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::post("/login", [UserController::class, 'login']);
Route::get("/", [proiductcontroller::class, 'index']);
Route::get("detail/{id}", [proiductcontroller::class, 'detail']);
Route::get("search", [proiductcontroller::class, 'search']);
Route::post("add_to_cart", [proiductcontroller::class, 'addtocart']);
Route::get("cartlist", [proiductcontroller::class, 'cartlist']);
Route::get("removecart/{id}", [proiductcontroller::class, 'removecart']);
Route::get("ordernow", [proiductcontroller::class, 'ordernow']);
Route::post("orderplace", [proiductcontroller::class, 'orderplace']);
Route::get("myorder", [proiductcontroller::class, 'myorder']);