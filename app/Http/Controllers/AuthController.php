<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "Login Admin",
            "url" => url('/assets')
        ]);
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('master-pemesan')->with('success', 'Login Berhasil!');
        }

        return redirect('/login')->with('error', "Login Gagal!");
    }

    public function logout(Request $request)
    {
        Auth::Logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/pemesanan/create');
    }
}
