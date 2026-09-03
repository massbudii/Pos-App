@extends('store.layouts.auth')

@section('content')
    <!-- Breadcrumbs -->
    <section class="flat-spacing-1">
        <div class="container">
            <ul class="breadcrumbs-page">
                <li><a href="{{ url('/') }}" class="h6 link">Beranda</a></li>
                <li class="d-flex"><i class="icon icon-caret-right"></i></li>
                <li>
                    <h6 class="current-page fw-normal">Masuk Akun</h6>
                </li>
            </ul>
        </div>
    </section>
    <!-- /Breadcrumbs -->

    <!-- Login Section -->
    <section class="flat-spacing">
        <div class="container">
            <div class="s-log">
                <!-- Kolom Kiri: Form Login -->
                <div class="col-left">
                    <h1 class="heading">Masuk Akun</h1>
                    <p class="h6 text-sub mb-4">
                        Silakan masuk ke akun Anda untuk melanjutkan pesanan di <strong>Aksara Coffee & Eatery</strong>.
                    </p>

                    <form class="form-login">
                        <div class="list-ver">
                            {{-- Input Email --}}
                            <fieldset>
                                <input type="email" placeholder="Alamat Email *" required>
                            </fieldset>

                            {{-- Input Password --}}
                            <fieldset class="password-wrapper mb-8">
                                <input class="password-field" type="password" placeholder="Kata Sandi *" required>
                                <span class="toggle-pass icon-show-password"></span>
                            </fieldset>

                            {{-- Remember & Lupa Password --}}
                            <div class="check-bottom">
                                <div class="checkbox-wrap">
                                    <input id="remember" type="checkbox" class="tf-check">
                                    <label for="remember" class="h6">Ingat saya di perangkat ini</label>
                                </div>
                                <h6>
                                    <a href="javascript:void(0)" class="link text-muted">
                                        Lupa kata sandi?
                                    </a>
                                </h6>
                            </div>
                        </div>

                        {{-- Tombol Submit --}}
                        <button id="btnLogin" type="submit" class="tf-btn animate-btn w-100 mt-4">
                            Masuk Sekarang
                        </button>
                    </form>
                </div>

                <!-- Kolom Kanan: Info Pelanggan Baru -->
                <div class="col-right">
                    <h1 class="heading">Pelanggan Baru?</h1>
                    <p class="h6 text-sub">
                        Daftarkan akun member baru Anda di Aksara Coffee & Eatery dan nikmati berbagai promo spesial, voucher potongan harga, dan kemudahan belanja.
                    </p>
                    <div class="get-discout-wrap">
                        <h6 class="fw-semibold mb-16">Daftar sekarang dan dapatkan promo:</h6>
                        <div class="box-discount style-2">
                            <div class="discount-top">
                                <div class="discount-off">
                                    <p class="h6">Voucher Member</p>
                                    <h6 class="sale-off h6 fw-bold">DISKON 30%</h6>
                                </div>
                                <div class="discount-from">
                                    <p class="h6">
                                        Untuk pesanan menu <br class="d-sm-none"> kopi & bakery
                                    </p>
                                </div>
                            </div>
                            <div class="discount-bot">
                                <h6 class="text-nowrap fw-bold">Kode: AKSARABARU</h6>
                                <a href="{{ route('customer.form-register') }}" class="tf-btn animate-btn w-100 fw-bold">
                                    Daftar Akun Baru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
