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

Route::get('login/', function () {
    return view('login');
});

Route::get('/daftaruser', function () {
    return view('daftaruser');
});

Route::get('/daftarabsen', function () {
    return view('daftarabsen');
});

Route::get('/dataabsen', function () {
    return view('dataabsen');
});

Route::get('/pindahkelas', function () {
    return view('pindahkelas');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
