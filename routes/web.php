<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\epaperController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\langgananController;
use App\Http\Controllers\loginController;

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
Route::get('/', [homeController::class, 'index']);

Route::get('/epaper', [epaperController::class, 'index']);

Route::get('/langganan', [langgananController::class, 'index']);

Route::get('/login', [loginController::class, 'index']);

Route::get('/register', function () {
    return view('front/register', [
        "title" => "Register"
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