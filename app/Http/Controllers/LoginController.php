<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:3'
        ]);
        $user = User::where('name', '=', $request->username)->first();

        if (!$user) {
            return back()->withInput()->with('pesan', 'Maaf Akun Tidak Ditemukan');
        } else {
            if (Hash::check($request->password, $user->password)) {
                session(['username' => $request->username]);
                return redirect()->route('siswa.index');
            } else {
                return back()->withInput()->with('pesan', 'Maaf Akun Tidak Ditemukan');
            }
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login')->with('pesan', 'Logout Berhasil');
    }
}
