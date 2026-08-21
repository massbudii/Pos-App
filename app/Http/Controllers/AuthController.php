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
        ]);

        $remember = $request->boolean('remember');

        $user = User::where('email', $validasi['email'])->first();

        if(!$user) {
            return back()->withErrors([
                'email' => 'Email belum terdaftar di sistem',
            ])->onlyInput('email');
        }

        if(!Hash::check($validasi['password'], $user->password)){
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
}
