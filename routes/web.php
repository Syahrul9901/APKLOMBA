<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');

route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');



