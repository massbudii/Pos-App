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

                    <form class="form-login" action="{{ route('customer.proses-register') }}" method="POST">
                        @csrf
                        <div class="list-ver">
                            {{-- Input Nama Lengkap --}}
                            <fieldset class="mb-3">
                                <label class="fw-semibold text-dark mb-2 d-block">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Contoh: Budi Santoso" 
                                    class="@error('name') is-invalid @enderror" 
                                    value="{{ old('name') }}">
                                @error('name')
                                    <small class="text-danger d-block mt-1">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </fieldset>

                            {{-- Input Email --}}
                            <fieldset class="mb-3">
                                <label class="fw-semibold text-dark mb-2 d-block">Alamat Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="Contoh: nama@email.com" 
                                    class="@error('email') is-invalid @enderror" 
                                    value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger d-block mt-1">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </fieldset>

                            {{-- Input Password --}}
                            <fieldset class="password-wrapper mb-3">
                                <label class="fw-semibold text-dark mb-2 d-block">Kata Sandi <span class="text-danger">*</span></label>
                                <input class="password-field @error('password') is-invalid @enderror" 
                                    type="password" name="password" placeholder="Minimal 6 karakter">
                                <span class="toggle-pass icon-show-password" style="top: 42px;"></span>
                                @error('password')
                                    <small class="text-danger d-block mt-1">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </fieldset>

                            {{-- Input Konfirmasi Password --}}
                            <fieldset class="password-wrapper mb-4">
                                <label class="fw-semibold text-dark mb-2 d-block">Ulangi Kata Sandi <span class="text-danger">*</span></label>
                                <input class="password-field @error('password_confirmation') is-invalid @enderror" 
                                    type="password" name="password_confirmation" placeholder="Masukkan ulang kata sandi Anda">
                                <span class="toggle-pass icon-show-password" style="top: 42px;"></span>
                                @error('password_confirmation')
                                    <small class="text-danger d-block mt-1">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </fieldset>
                        </div>

                        {{-- Tombol Submit --}}
                        <button type="submit" class="tf-btn animate-btn w-100 mt-4">
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
                                <a href="{{ route('customer.form-login') }}" class="tf-btn animate-btn w-100 fw-bold">
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
