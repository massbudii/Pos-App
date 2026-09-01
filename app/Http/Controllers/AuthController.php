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


    public function FormRegister()
    {
        return view('auth.register');
    }

    public function ProsesRegister(Request $request)
    {
        $validasi = $request->validate(
            [
                'name'                  => 'required|string|max:100',
                'email'                 => 'required|string|email|max:255|unique:users,email',
                'password'              => 'required|string|min:6',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'name.required'                  => 'Nama lengkap wajib diisi',
                'name.string'                    => 'Nama harus berpa teks / huruf yang valid',
                'name.max'                       => 'Nama tidak boleh lebih dari 100 karakter',
                'email.required'                 => 'Email lengkap wajib diisi',
                'email.string'                   => 'Email harus berpa teks / huruf yang valid',
                'email.email'                    => 'Format email tidka valid wajib menggunakan @',
                'email.max'                      => 'email tidak boleh lebih dari 255 karakter',
                'email.unique'                   => 'Email tersebut telah terdaftar, gunakan email lain',
                'password.required'              => 'Password wajib diisi.',
                'password.min'                   => 'Password minimal harus 6 karakter.',
                'password_confirmation.required' => 'Konfirmasi password wajib diisi',
                'password_confirmation.same'     => 'Konfirmasi password tidak cocok',
            ]
        );

        $validasi['role'] = 'customer';

        User::create($validasi);

        return redirect()->route('login')->with('sukses', 'Akun anda berhasil didaftarkan silahkan login');
    }
}
