<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginPage()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $creds = $request->only('username', 'password');

        if (Auth::attempt($creds)) {
            return view('home');
        }
        return back()->with('error', 'Username / Password Salah');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
