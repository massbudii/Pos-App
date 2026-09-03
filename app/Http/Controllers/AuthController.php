<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function FormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validasi = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'password.required' => 'Password wajib diisi',
            ]
        );

        $remember = $request->boolean('remember');

        $user = User::where('email', $validasi['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Email belum terdaftar di sistem',
            ])->onlyInput('email');
        }

        if (!Hash::check($validasi['password'], $user->password)) {
            return back()->withErrors([
                'password' => 'Password yang anda masukkan salah',
            ])->onlyInput('email');
        }

        if (Auth::attempt($validasi, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('sukses', "Selamat datang, {$user->name}! Anda login sebagai {$user->role}.");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('sukses', 'Anda telah berhasil logout');
    }

    public function FormLoginCustomer()
    {
        return view('store.auth.login');
    }

    public function ProsesLoginCustomer(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $remember = $request->boolean('remember');

        // validasi field email terdaftar
        $user = User::where('email', $validasi['email'])->first();

        // validasi login menggunakna email prosesnya
        if(!$user) {
            return back()->withErrors([
                'email' => 'Email yang anda masukkan belum terdaftar, silahkan lakukan registrasi akun!.',
            ])->onlyInput('email');
        }

        // validasi login menggunakan password yang harus di cek
        if(!Hash::check($validasi['password'], $user->password)) {
            return back()->withErrors([
                'password' => 'Password yang anda masukkan salah!',
            ])->onlyInput('email');
        }

        // proses validasi login berhasil
      if(Auth::attempt($validasi, $remember)){
        $request->session()->regenerate();
        return redirect()->intended(route('shop.index'))->with('sukses', "Selamat datang kembali '$user->name' anda telah berhasil login");
      }
        return back()->withErrors(['email' => 'Gagal masuk akun.'])->onlyInput('email');

    }


    public function FormRegisterCustomer()
    {
        return view('store.auth.register');
    }

    public function ProsesRegisterCustomer(Request $request)
    {
        $validasi = $request->validate([
            'name'                  => 'required|string|max:100',
            'email'                 => 'required|string|email|max:255|unique:users,email',
            'password'              => 'required|string|min:6',
            'password_confirmation' => 'required|same:password',
        ], [
            'name.required'                  => 'Nama lengkap wajib diisi.',
            'email.required'                 => 'Email wajib diisi.',
            'email.unique'                   => 'Email tersebut sudah terdaftar, gunakan email lain.',
            'password.required'              => 'Kata sandi wajib diisi.',
            'password.min'                   => 'Kata sandi minimal 6 karakter.',
            'password_confirmation.required' => 'Ulangi kata sandi wajib diisi.',
            'password_confirmation.same'     => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        // secara sepihak menambahkan role sebagai customer
        $validasi['role'] = 'customer';

        $user = User::create($validasi);
        Auth::login($user);
        return redirect()->intended(route('shop.index'))->with('sukses', "Akun anda berhasil diaktifkan! Selamat datang '$user->name'");

    }

    public function logoutCustomer(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.form-login')->with('sukses', 'Anda telah berhasil logout');
    }

}

