@extends('layouts.app-auth')

@section('content')
    <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo" class="mb-10 dark_logo">
                <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="Logo" class="mb-10 white_logo">
            </a>
            <h4>
                Mulai Kelola Tokomu
                <span class="block text-slate-800 dark:text-slate-400 font-bold mt-1">
                    Dash POS APP
                </span>
            </h4>
        </div>
        <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1] mb-10">
            <img src="{{ asset('assets/images/auth/pos-kasir.jpg') }}" alt="Ilustrasi Kasir" class="h-full w-full object-contain">
        </div>
    </div>
    <div class="right-column relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
            <div class="auth-box h-full flex flex-col justify-center">
                <div class="mobile-logo text-center mb-6 lg:hidden block">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo" class="mb-10 dark_logo">
                        <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="Logo" class="mb-10 white_logo">
                    </a>
                </div>
                <div class="text-center 2xl:mb-10 mb-4">
                    <h4 class="font-medium">Daftar Akun Baru</h4>
                    <div class="text-slate-500 text-base">
                        Buat akun untuk memulai menggunakan aplikasi POS
                    </div>
                </div>

                <!-- BEGIN: Register Form -->
                <form action="{{ route('proses-register') }}" method="POST" class="space-y-4" novalidate>
                    @csrf

                    {{-- Input Nama Lengkap --}}
                    <div class="fromGroup">
                        <label class="block capitalize form-label">Nama Lengkap</label>
                        <div class="relative">
                            <input type="text"
                                   name="name"
                                   class="form-control py-2 @error('name') !border-red-500 @enderror"
                                   placeholder="Masukkan nama lengkap"
                                   value="{{ old('name') }}"
                                   autofocus>
                        </div>
                        @error('name')
                            <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input Email --}}
                    <div class="fromGroup">
                        <label class="block capitalize form-label">Email</label>
                        <div class="relative">
                            <input type="email"
                                   name="email"
                                   class="form-control py-2 @error('email') !border-red-500 @enderror"
                                   placeholder="Masukkan email anda"
                                   value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input Role (Sesuai Blueprint untuk Pembelajaran) --}}
                    <div class="fromGroup">
                        <label class="block capitalize form-label">Pilih Peran (Role)</label>
                        <div class="relative">
                            <select name="role" class="form-control py-2 @error('role') !border-red-500 @enderror">
                                <option value="" disabled {{ old('role') ? '' : 'selected' }}>-- Pilih Role --</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="kasir" {{ old('role') == 'kasir' ? 'selected' : '' }}>Kasir</option>
                                <option value="owner" {{ old('role') == 'owner' ? 'selected' : '' }}>Owner</option>
                            </select>
                        </div>
                        @error('role')
                            <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input Password --}}
                    <div class="fromGroup">
                        <label class="block capitalize form-label">Password</label>
                        <div class="relative">
                            <input type="password"
                                   name="password" autocomplete="new-password"
                                   class="form-control py-2 @error('password') !border-red-500 @enderror"
                                   placeholder="Minimal 6 karakter">
                        </div>
                        @error('password')
                            <small class="text-xs text-red-500 mt-1 block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input Konfirmasi Password --}}
                    <div class="fromGroup">
                        <label class="block capitalize form-label">Konfirmasi Password</label>
                        <div class="relative">
                            <input type="password" autocomplete="new-password"
                                   name="password_confirmation"
                                   class="form-control py-2 @error('password_confirmation') !border-red-500

                                   @enderror"
                                   placeholder="Ulangi password anda">
                        </div>
                        @error('password_confirmation')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark block w-full text-center">Daftar Sekarang</button>
                </form>
                <!-- END: Register Form -->

                <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-8 uppercase text-sm text-center">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}" class="text-slate-900 dark:text-white font-medium hover:underline">
                        Masuk Di Sini
                    </a>
                </div>
            </div>
            <div class="auth-footer text-center">
                Copyright {{ date('Y') }}, POS App All Rights Reserved.
            </div>
        </div>
    </div>
@endsection
