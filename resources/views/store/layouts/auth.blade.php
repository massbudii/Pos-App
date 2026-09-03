<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Aksara - Coffee, Bakes & Artisan Eatery</title>
    <meta name="author" content="Aksara Coffee Co.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Aksara Coffee & Eatery - Masuk dan daftar akun pelanggan untuk menikmati sajian kopi dan bakes pilihan.">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="{{ asset('store/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('store/icon/icomoon/style.css') }}">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('store/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('store/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/styles.css') }}">

    <style>
        .form-login fieldset input.is-invalid {
            border-color: #dc3545 !important;
            background-color: #fff8f8 !important;
        }
        .form-login fieldset input.is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15) !important;
        }
    </style>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('store/images/logo/favicon.svg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('store/images/logo/favicon.svg') }}">
</head>

<body>
    {{-- Toast Notifikasi Sukses & Error Persis DashCode --}}
    @include('store.layouts.toast')

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-caret-up"></span>
    </button>

    <div id="wrapper">
        <!-- Header Khusus Auth (Hanya Logo di Tengah) -->
        <header class="tf-header border-bottom py-3 bg-white">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Tombol Kembali ke Beranda --}}
                    <a href="{{ route('shop.index') }}" class="btn-line link small d-flex align-items-center gap-1 text-muted">
                        <i class="icon icon-arrow-left"></i>
                        <span>Kembali ke Toko</span>
                    </a>

                    {{-- Logo Brand Aksara --}}
                    <a href="{{ route('shop.index') }}" class="logo-site text-decoration-none">
                        <span class="fs-3 fw-bold text-dark tracking-tight">Aksara<span class="text-primary">.</span></span>
                    </a>

                    {{-- Placeholder Kanan Supaya Logo Tetap Center --}}
                    <div style="width: 120px;" class="d-none d-sm-block"></div>
                </div>
            </div>
        </header>

        <!-- Main Content (Form Login / Register) -->
        <main>
            @yield('content')
        </main>

        <!-- Footer Ringkas Khusus Auth -->
        <footer class="py-4 bg-white border-top text-center">
            <div class="container">
                <p class="small text-muted mb-0">
                    &copy; {{ date('Y') }} <strong>Aksara Coffee & Eatery</strong>. Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
        </footer>
    </div>

    <!-- Javascript Assets -->
    <script src="{{ asset('store/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('store/js/jquery.min.js') }}"></script>
    <script src="{{ asset('store/js/main.js') }}"></script>
</body>
</html>