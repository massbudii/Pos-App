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
                <form action="{{ route('login') }}" method="post" class="space-y-4" novalidate>
                    @csrf
                    <div class="fromGroup">
                        <label class="block capitalize form-label">email</label>
                        <div class="relative ">
                            <input type="email" name="email" class="form-control py-2 @error('email')

                            @enderror" placeholder="Silahkan masukkan email"
                                value="{{ old('email') }}">
                        </div>

                        @error('email')
                        <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="fromGroup       ">
                        <label class="block capitalize form-label  ">passwrod</label>
                        <div class="relative "><input type="password" name="password" class="form-control py-2 @error('password')
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
                <div
                    class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
                    Belum mempunyai akun?
                    <a href="signup-one.html" class="text-slate-900 dark:text-white font-medium hover:underline">
                        Registrasi
                    </a>
                </div>
            </div>
            <div class="auth-footer text-center">
                Copyright 2026, Pos-App - Vista It.
            </div>
        </div>
    </div>
@endsection
