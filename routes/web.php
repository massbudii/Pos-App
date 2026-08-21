<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', [TestController::class, 'login'])->name('login');
// Route::get('form', [TestController::class, 'form'])->name('form');

Route::get('/login', [AuthController::class, 'FormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('dashboard', function () {
    return 'Selamat Datang, ' . Auth::user()->name . '! Anda login sebagai role: ' . auth::user()->role;
})->middleware('auth')->name('dashboard');
