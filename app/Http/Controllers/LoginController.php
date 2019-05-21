<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index')->with('success', 'Login Successful');
        } else {
            return redirect()->back()->with('error', 'Login details incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.get')->with('info', 'You are now logged out');
    }
}
