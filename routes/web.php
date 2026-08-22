<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', [TestController::class, 'login'])->name('login');
// Route::get('form', [TestController::class, 'form'])->name('form');

Route::get('/login', [AuthController::class, 'FormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
