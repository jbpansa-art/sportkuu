<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // =========================
    // MENAMPILKAN REGISTER
    // =========================
    public function showRegister()
    {
        return view('auth.register');
    }


    // =========================
    // PROSES REGISTER
    // =========================
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect('/login')->with(
            'success',
            'Registrasi berhasil! Silakan login.'
        );
    }


    // =========================
    // MENAMPILKAN LOGIN
    // =========================
    public function showLogin()
    {
        return view('auth.login');
    }


    // =========================
    // PROSES LOGIN
    // =========================
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek email dan password
        if ($user && Hash::check($request->password, $user->password)) {

            // Login user
            Auth::login($user);

            // Buat session baru
            $request->session()->regenerate();

            // Kalau admin masuk ke dashboard admin
            if ($user->role === 'admin') {
            return redirect('/admin');
                }

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }


    // =========================
    // LOGOUT
    // =========================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}