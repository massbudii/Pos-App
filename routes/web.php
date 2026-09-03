<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;




// 1. ROUTE KHUSUS CUSTOMER (aksara.test)
Route::domain(env('DOMAIN_STORE', 'aksara.coffe.test'))->group(function () {
    // halaman utama / landing page toko
    Route::get('/', [StoreController::class, 'index'])->name('shop.index');
    Route::get('/menu', [StoreController::class, 'menu'])->name('shop.menu');
    Route::get('/cart', [StoreController::class, 'cart'])->name('shop.chart');

    // autentikasi khusus customer
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'FormLoginCustomer')->name('customer.form-login');
        Route::post('/login', 'ProsesLoginCustomer')->name('customer.proses-login');
        Route::get('/register', 'FormRegisterCustomer')->name('customer.form-register');
        Route::post('/register', 'ProsesRegisterCustomer')->name('customer.proses-register');
        Route::post('/logout', 'logoutCustomer')->name('customer.logout');
    });

    // customer yang sudah login (keranjang dan checkout)
    Route::middleware('auth')->group(function () {});
});

Route::domain(env('DOMAIN_STAFF', 'pos-aksara.test'))->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login',  'FormLogin')->name('login');
        Route::post('/login',  'login')->name('proses-login');
        Route::post('/logout',  'logout')->name('logout');
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

            Route::prefix('supplier')->name('supplier.')->group(function () {
                Route::get('/', [SupplierController::class, 'index'])->name('index');
                Route::post('/create-proses', [SupplierController::class, 'ProsesTambah'])->name('store.proses');
                Route::put('/update-proses/{id}', [SupplierController::class, 'ProsesUpdate'])->name('update.proses');
                Route::patch('/aktifkan-proses/{id}', [SupplierController::class, 'ProsesAktifkan'])->name('aktifkan.proses');
                Route::patch('/nonaktifkan-proses/{id}', [SupplierController::class, 'ProsesNonaktifkan'])->name('nonaktifkan.proses');
                Route::delete('/delete-proses/{id}', [SupplierController::class, 'ProsesDelete'])->name('delete.proses');
            });
        });
    });
});
