<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/epaper', function () {
    return view('epaper', [
        "title" => "Epaper"
    ]);
});

Route::get('/langganan', function () {
    return view('langganan', [
        "title" => "langganan"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

// Admin
Route::get('admin/admin', function () {
    return view('admin/admin', [
        "title" => "Admin"
    ]);
});

Route::get('admin/pesanan', function () {
    return view('admin/pesanan', [
        "title" => "Pesanan"
    ]);
});

Route::get('admin/produk', function () {
    return view('admin/produk', [
        "title" => "Produk"
    ]);
});

Route::get('admin/tambah-produk', function () {
    return view('admin/tambah-produk', [
        "title" => "Tambah Produk"
    ]);
});

Route::get('admin/paket', function () {
    return view('admin/paket', [
        "title" => "Paket"
    ]);
});