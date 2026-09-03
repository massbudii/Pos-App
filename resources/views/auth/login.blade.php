@extends('layouts.app-auth')
@section('title', 'Form Login')
@section('content')
    <div class="left-column relative z-[1]">

        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
            <a href="index.html">
                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
            </a>
            <h4>
                Selamat Datang
                <span class="block text-slate-800 dark:text-slate-400 font-bold ">
                    Dash Pos APP
                </span>
            </h4>
        </div>
        <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1] mb-10">
            <img src="{{ asset('assets/images/auth/pos-kasir.jpg') }}" alt="" class=" h-full w-full object-contain">
        </div>
    </div>
    <div class="right-column  relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
            <div class="auth-box h-full flex flex-col justify-center">
                {{-- Alert Sukses Sesuai Gambar Referensi (Animasi Smooth) --}}
                @if (session('sukses'))
                    <div id="alert-sukses"
                        style="background-color: #ffffff !important; border: 1.5px solid #86efac !important; border-radius: 16px !important; box-shadow: 0 4px 20px rgba(34, 197, 94, 0.12) !important; animation: alertSlideIn 0.45s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;"
                        class="mb-5 flex items-center p-3.5">

                        {{-- Kotak Icon Hijau Muda + Lingkaran Centang Animasi --}}
                        <div style="width: 44px !important; height: 44px !important; background-color: #dcfce7 !important; border-radius: 12px !important; margin-right: 12px !important;"
                             class="flex items-center justify-center flex-shrink-0">
                            <div style="width: 26px !important; height: 26px !important; background-color: #22c55e !important; border-radius: 50% !important; animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.15s both !important;"
                                 class="flex items-center justify-center shadow-sm">
                                <svg style="width: 15px !important; height: 15px !important; color: #ffffff !important;" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                        </div>

                        {{-- Teks Judul & Pesan --}}
                        <div class="flex-1">
                            <h5 style="color: #0f172a !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; line-height: 1.2 !important;">Berhasil!</h5>
                            <p style="color: #475569 !important; font-size: 13px !important; margin: 3px 0 0 0 !important; line-height: 1.35 !important; font-weight: 400 !important;">
                                {{ session('sukses') }}
                            </p>
                        </div>
                    </div>

                    <style>
                        @keyframes alertSlideIn {
                            0% { transform: translateY(-15px); opacity: 0; }
                            100% { transform: translateY(0); opacity: 1; }
                        }
                        @keyframes iconPop {
                            0% { transform: scale(0); opacity: 0; }
                            70% { transform: scale(1.3); }
                            100% { transform: scale(1); opacity: 1; }
                        }
                    </style>

                    <script>
                        setTimeout(function() {
                            let alertBox = document.getElementById('alert-sukses');
                            if (alertBox) {
                                alertBox.style.transition = 'all 0.4s ease';
                                alertBox.style.opacity = '0';
                                alertBox.style.transform = 'translateY(-10px)';
                                setTimeout(() => alertBox.remove(), 400);
                            }
                        }, 5000);
                    </script>
                @endif

                {{-- Alert Error Sesuai Gambar Referensi (Animasi Smooth) --}}
                @if (session('error'))
                    <div id="alert-error"
                        style="background-color: #ffffff !important; border: 1.5px solid #fca5a5 !important; border-radius: 16px !important; box-shadow: 0 4px 20px rgba(239, 68, 68, 0.12) !important; animation: alertSlideIn 0.45s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;"
                        class="mb-5 flex items-center p-3.5">

                        {{-- Kotak Icon Merah Muda + Lingkaran Tanda Seru Animasi --}}
                        <div style="width: 44px !important; height: 44px !important; background-color: #fee2e2 !important; border-radius: 12px !important; margin-right: 12px !important;"
                             class="flex items-center justify-center flex-shrink-0">
                            <div style="width: 26px !important; height: 26px !important; background-color: #ef4444 !important; border-radius: 50% !important; animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.15s both !important;"
                                 class="flex items-center justify-center shadow-sm">
                                <span style="color: #ffffff !important; font-size: 15px !important; font-weight: 900 !important; line-height: 1 !important;">!</span>
                            </div>
                        </div>

                        {{-- Teks Judul & Pesan --}}
                        <div class="flex-1">
                            <h5 style="color: #0f172a !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; line-height: 1.2 !important;">Error</h5>
                            <p style="color: #475569 !important; font-size: 13px !important; margin: 3px 0 0 0 !important; line-height: 1.35 !important; font-weight: 400 !important;">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>

                    <script>
                        setTimeout(function() {
                            let alertError = document.getElementById('alert-error');
                            if (alertError) {
                                alertError.style.transition = 'all 0.4s ease';
                                alertError.style.opacity = '0';
                                alertError.style.transform = 'translateY(-10px)';
                                setTimeout(() => alertError.remove(), 400);
                            }
                        }, 5000);
                    </script>
                @endif

                <div class="mobile-logo text-center mb-6 lg:hidden block">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                        <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                    </a>
                </div>
                <div class="text-center 2xl:mb-10 mb-4">
                    <h4 class="font-medium">Silahkan Login</h4>
                    <div class="text-slate-500 text-base">
                        Lengkapi data untuk bisa melakukan pekerjaan anda!!!
                    </div>
                </div>
                <!-- BEGIN: Login Form -->
                <!-- BEGIN: Alert Notifikasi Sukses / Gagal -->
                <!-- END: Alert Notifikasi -->

                <!-- BEGIN: Login Form -->
                <form action="{{ route('proses-login') }}" method="post" class="space-y-4" novalidate>
                    @csrf
                    <div class="fromGroup">
                        <label class="block capitalize form-label">email</label>
                        <div class="relative ">
                            <input type="email" name="email"
                                class="form-control py-2 @error('email')

                            @enderror"
                                placeholder="Silahkan masukkan email" value="{{ old('email') }}">
                        </div>

                        @error('email')
                            <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="fromGroup       ">
                        <label class="block capitalize form-label  ">passwrod</label>
                        <div class="relative "><input type="password" name="password"
                                class="form-control py-2 @error('password')
                        @enderror"
                                placeholder="Silahka masukkan password" value="">
                        </div>

                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex justify-between">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="hiddens">
                            <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize">Ingat saya</span>
                        </label>
                        <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium"
                            href="forget-password-one.html">Lupa Password?
                        </a>
                    </div>
                    <button class="btn btn-dark block w-full text-center">Login</button>
                </form>
                <!-- END: Login Form -->
                <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                    <div
                        class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4  min-w-max text-sm text-slate-500 font-normal">
                        Or continue with
                    </div>
                </div>
                <div class="max-w-[242px] mx-auto mt-8 w-full">

                    <!-- BEGIN: Social Log in Area -->
                    <ul class="flex">
                        <li class="flex-1">
                            <a href="#"
                                class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                                <img src="assets/images/icon/tw.svg" alt="">
                            </a>
                        </li>
                        <li class="flex-1">
                            <a href="#"
                                class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                                <img src="assets/images/icon/fb.svg" alt="">
                            </a>
                        </li>
                        <li class="flex-1">
                            <a href="#"
                                class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                                <img src="assets/images/icon/in.svg" alt="">
                            </a>
                        </li>
                        <li class="flex-1">
                            <a href="#"
                                class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                                <img src="assets/images/icon/gp.svg" alt="">
                            </a>
                        </li>
                    </ul>
                    <!-- END: Social Log In Area -->
                </div>
               
            </div>
            <div class="auth-footer text-center">
                Copyright 2026, Pos-App - Vista It.
            </div>
        </div>
    </div>
@endsection
