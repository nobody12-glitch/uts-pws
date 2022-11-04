<?php

use App\Providers\RouteServiceProvider;
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

Route::get('home', function () {
    return view('main');
});

Route::get('/', function () {
    return view('navbar');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('mahasiswa1', function () {
    return view('mahasiswa1');
});

Route::get('mahasiswa2', function () {
    return view('mahasiswa2');
});
