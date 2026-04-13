<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Auto-detect role dan redirect ke halaman yang sesuai
            if (in_array($user->email, ['admin@ekkyrefleksi.com', 'admin@admin.com'])) {
                // Admin login - redirect ke dashboard admin
                return redirect('/admin/dashboard')->with('success', 'Login berhasil! Selamat datang di Admin Dashboard.');
            } else {
                // User login - redirect ke halaman utama user
                return redirect('/')->with('success', 'Login berhasil! Selamat datang di Ekky Refleksi Family.');
            }
        }

        // Jika login gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        return redirect('/')->with('success', 'Registrasi berhasil! Selamat bergabung dengan Ekky Refleksi Family.');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah keluar dari sistem.');
    }
}
