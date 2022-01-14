<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController; //memanggil controller

//           url            nama class           nama fungsi yang di controller
Route::get('menu/home', [MenuController::class, 'home']);
Route::get('menu/about', [MenuController::class, 'about']);
Route::get('menu/service', [MenuController::class, 'service']);
Route::get('menu/partner', [MenuController::class, 'partner']);
Route::get('menu/contact', [MenuController::class, 'contact']);
Route::get('menu/product/{slug?}', [MenuController::class, 'product']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages/home', function () {
    $title = 'Home Page';
    return view('pages.home', compact('title'));
});

Route::get('pages/profile', function () {
    $title = 'Profile Page';
    return view('pages.profile', compact('title'));
});

Route::get('halaman/beranda', function () {
    $title = 'Beranda';
    return view('halaman.beranda', compact('title'));
});

Route::get('halaman/profil', function () {
    $title = 'Profil';
    return view('halaman.profil', compact('title'));
});

Route::get('halaman/kontak', function () {
    $title = 'Kontak';
    return view('halaman.kontak', compact('title'));
});