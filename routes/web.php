<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
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

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::prefix('kategori-produk')->name('kategori.')->group(function () {
            Route::get('/', [KategoriController::class, 'index'])->name('index');
            Route::post('/create-proses', [KategoriController::class, 'ProsesTambah'])->name('store.proses');
            Route::put('/update-proses/{id}', [KategoriController::class, 'ProsesUpdate'])->name('update.proses');
            Route::patch('/aktifkan-proses/{id}', [KategoriController::class, 'AktifkanProses'])->name('aktifkan.proses');
            Route::patch('/nonaktfikan-proses/{id}', [KategoriController::class, 'NonaktifkanProses'])->name('nonaktifkan.proses');
            Route::delete('/delete-proses/{id}', [KategoriController::class, 'hapus'])->name('proses.hapus');
        });
    });
});
