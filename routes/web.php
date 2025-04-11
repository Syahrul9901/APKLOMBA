<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('registrasi');
});
route::get('/welcome', [AuthController::class, 'tampilWelcome'])->name('welcome.tampil');

route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');

route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

route::get('/home', [HomeController::class, 'tampilHome'])->name('home.tampil');