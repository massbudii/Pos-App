<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', [TestController::class, 'login'])->name('login');
// Route::get('form', [TestController::class, 'form'])->name('form');

Route::get('/login', [AuthController::class, 'FormLogin'])->name('login');
