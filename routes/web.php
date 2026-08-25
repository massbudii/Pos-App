<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login',  'FormLogin')->name('login');
    Route::post('/login',  'login')->name('proses-login');
    Route::post('/logout',  'logout')->name('logout');
    Route::get('/Register',  'FormRegister')->name('register');
    Route::post('/Register-proses', 'ProsesRegister')->name('proses-register');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
});
