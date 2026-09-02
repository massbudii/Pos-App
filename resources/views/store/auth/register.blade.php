@extends('store.layouts.auth')

@section('content')
    <!-- Breadcrumbs -->
    <section class="flat-spacing-1">
        <div class="container">
            <ul class="breadcrumbs-page">
                <li><a href="{{ url('/') }}" class="h6 link">Beranda</a></li>
                <li class="d-flex"><i class="icon icon-caret-right"></i></li>
                <li>
                    <h6 class="current-page fw-normal">Daftar Akun Baru</h6>
                </li>
            </ul>
        </div>
    </section>
    <!-- /Breadcrumbs -->

    <!-- Register Section -->
    <section class="flat-spacing">
        <div class="container">
            <div class="s-log">
                <!-- Kolom Kiri: Form Register -->
                <div class="col-left">
                    <h1 class="heading">Daftar Akun</h1>
                    <p class="h6 text-sub mb-4">
                        Lengkapi data diri Anda untuk membuat akun pelanggan baru di <strong>Aksara Coffee & Eatery</strong>.
                    </p>

                    <form class="form-login">
                        <div class="list-ver">
                            {{-- Input Nama Lengkap --}}
                            <fieldset>
                                <input type="text" placeholder="Nama Lengkap *" required>
                            </fieldset>

                            {{-- Input Email --}}
                            <fieldset>
                                <input type="email" placeholder="Alamat Email *" required>
                            </fieldset>

                            {{-- Input Password --}}
                            <fieldset class="password-wrapper mb-2">
                                <input class="password-field" type="password" placeholder="Kata Sandi (Min. 6 Karakter) *" required>
                                <span class="toggle-pass icon-show-password"></span>
                            </fieldset>

                            {{-- Input Konfirmasi Password --}}
                            <fieldset class="password-wrapper mb-4">
                                <input class="password-field" type="password" placeholder="Ulangi Kata Sandi *" required>
                                <span class="toggle-pass icon-show-password"></span>
                            </fieldset>
                        </div>

                        {{-- Tombol Submit --}}
                        <button id="btnRegister" type="submit" class="tf-btn animate-btn w-100 mt-4">
                            Daftar Sekarang
                        </button>
                    </form>
                </div>

                <!-- Kolom Kanan: Info Member Login -->
                <div class="col-right">
                    <h1 class="heading">Sudah Punya Akun?</h1>
                    <p class="h6 text-sub">
                        Jika Anda sudah pernah mendaftarkan akun di Aksara Coffee & Eatery, silakan langsung masuk untuk melihat keranjang dan melanjutkan pesanan Anda.
                    </p>
                    <div class="get-discout-wrap">
                        <div class="box-discount style-2">
                            <div class="discount-top">
                                <div class="discount-off">
                                    <p class="h6">Member Aksara</p>
                                    <h6 class="sale-off h6 fw-bold">LOGIN CEPAT</h6>
                                </div>
                                <div class="discount-from">
                                    <p class="h6">
                                        Akses pesanan Anda <br class="d-sm-none"> kapan saja
                                    </p>
                                </div>
                            </div>
                            <div class="discount-bot">
                                <a href="login.html" class="tf-btn animate-btn w-100 fw-bold">
                                    Masuk ke Akun Saya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection