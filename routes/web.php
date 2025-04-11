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

route::post('/logout', [AuthController::class, 'logout'])->name('logout');

route::get('/home', [HomeController::class, 'tampilHome'])->name('home.tampil');
route::get('/user' , [HomeController::class, 'tampilUser'])->name('user.tampil');
route::get('/admin' , [HomeController::class, 'tampilAdmin'])->name('admin.tampil');
route::get('/developmen' , [HomeController::class, 'tampilDevelopmen'])->name('developmen.tampil');