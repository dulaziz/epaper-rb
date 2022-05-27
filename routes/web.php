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

Route::get('/viewEpaper', function () {
    return view('front/viewEpaper', [
        "title" => "View Epaper"
    ]);
});

Route::get('/registerCetak', function () {
    return view('front/registerCetak', [
        "title" => "Register Cetak"
    ]);
});

Route::get('/flip', function () {
    return view('front/flip', [
        "title" => "Flip"
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

Route::get('admin/pelangganDigital', function () {
    return view('admin/pelangganDigital', [
        "title" => "Pelanggan digital"
    ]);
});

Route::get('admin/pelangganKoran', function () {
    return view('admin/pelangganKoran', [
        "title" => "Pelanggan koran"
    ]);
});

Route::get('admin/detailPelangganDigital', function () {
    return view('admin/detailPelangganDigital', [
        "title" => "Detail Pelanggan digital"
    ]);
});

Route::get('admin/detailPelangganKoran', function () {
    return view('admin/detailPelangganKoran', [
        "title" => "Detail Pelanggan koran"
    ]);
});

Route::get('admin/pesananKoran', function () {
    return view('admin/pesananKoran', [
        "title" => "Pesanan koran"
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

Route::get('admin/tambahPaket', function () {
    return view('admin/tambahPaket', [
        "title" => "Tambah Paket"
    ]);
});