<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/product', function () {
    return view('home.product');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/product/{id}', function () {
    return view('home.detailProduct');
});


Route::get('/owner', function () {
    return view('owner.index');
});
Route::get('/cart', function () {
    return view('owner.cart');
});
Route::get('/transactions', function () {
    return view('owner.transactions');
});
Route::get('/owner/items', function () {
    return view('owner.items');
});
Route::get('/transactions/{id}', function () {
    return view('owner.detailTransaction');
});
