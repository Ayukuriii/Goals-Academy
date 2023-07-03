<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_register()
    {
        return view('auth.register');
    }
    // memproses request register
    public function post_register(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $user = User::create($validateData);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice')->with('success', 'Registration successfull! Please check your email for verification');
        // return redirect('/')->with('success', 'Registration successfull! Please login');
    }

    public function get_login()
    {
        return view('auth.login');
    }
    // memproses akses login
    public function post_login(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('login',
                '<h5>Login Berhasil</h5>
                <p>Selamat Datang! Kini kamu dapat menikmati berbagai fitur dan program Goals Academy</p>'
            );
        }
        return back()->with('loginError', 'Email or Password incorrect');
    }

    // memproses akses logout
    public function post_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
