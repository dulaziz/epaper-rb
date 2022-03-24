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

// User Front
Route::get('/', function () {
    return view('front/home', [
        "title" => "Home"
    ]);
});

Route::get('/epaper', function () {
    return view('front/epaper', [
        "title" => "Epaper"
    ]);
});

Route::get('/langganan', function () {
    return view('front/langganan', [
        "title" => "Langganan"
    ]);
});

Route::get('/login', function () {
    return view('front/login', [
        "title" => "Login"
    ]);
});

Route::get('/daftar', function () {
    return view('front/daftarAkun', [
        "title" => "Daftar"
    ]);
});


// Admin
Route::get('admin/login', function () {
    return view('admin/login', [
        "title" => "Login"
    ]);
});

Route::get('/admin', function () {
    return view('admin/index', [
        "title" => "Dashboard"
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

Route::get('admin/tambahProduk', function () {
    return view('admin/tambahProduk', [
        "title" => "Tambah Produk"
    ]);
});

Route::get('admin/paket', function () {
    return view('admin/paket', [
        "title" => "Paket"
    ]);
});

Route::get('admin/action', function () {
    return view('admin/action', [
        "title" => "Action"
    ]);
});