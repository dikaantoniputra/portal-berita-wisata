<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

   

    public function showLoginForm()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/admin');
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'message' => 'Invalid credentials.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
