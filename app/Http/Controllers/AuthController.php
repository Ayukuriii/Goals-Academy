<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // laravel register
    public function get_register()
    {
        return view('auth.register');
    }

    // memproses request register
    public function post_register(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required',
            'confirmation_password' => 'required',
        ]);

        if ($request->password !== $request->confirmation_password) {
            return back()->withInput();
        }

        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['user_level'] = 'user';

        $user = User::create($validateData);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice')->with('success', 'Registration successfull! Please check your email for verification');
    }

    public function get_login()
    {
        return view('auth.login');
    }
    // memproses akses login
    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $auth = auth()->user()->user_level;
            if ($auth === 'user') {
                return redirect()->intended('/')->with(
                    'login',
                    '<h5>Login Berhasil</h5>
                    <p>Selamat Datang! Kini kamu dapat menikmati berbagai fitur dan program Goals Academy</p>'
                );
            } else {
                return redirect()->intended('/' . $auth);
            }
        }
        return back()->with('login-failed', 'Email atau Password anda salah')->withInput();
    }

    // memproses akses logout
    public function post_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function get_lupa_password()
    {
        return view('auth.lupa_password', [
            'title' => 'Lupa Password'
        ]);
    }

    public function post_lupa_password(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function get_password_reset()
    {
        return view('auth.reset_password', [
            'title' => 'Password Reset',
        ]);
    }

    public function update_password(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
            'confirmation_password' => 'required',
        ];
        $validateData = $request->validate($rules);

        $user = User::where('email', $validateData['email'])->first();
        // check apakah password baru sama dengan password lama
        $check = Hash::check($request->password, $user->password);
        if ($check) {
            // password baru sama dengan password lama, kembali ke halama reset password
            return back()->with('password-match', 'Password yang anda gunakan sama dengan password lama!');
        }
        if ($validateData['password'] != $validateData['confirmation_password']) {
            // password baru tidak sama dengan konfirmasi password
            return back()->with('reset-failed', 'Password anda tidak cocok!');
        }

        $hashed = Hash::make($request->password);
        $user->password = $hashed;
        $user->save();
        return redirect('/login');
    }

    public function get_lengkapi_profile(string $id)
    {
        $user = User::find($id);
        if ($user->is_completed === 1) {
            return redirect('/user');
        }
        return view('auth.lengkapi_profile', [
            'data' => $user,
        ]);
    }
    public function post_lengkapi_profile(Request $request, string $id)
    {
        $user = User::find($id);



        $rules = [
            'username' => 'required',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required',
            'confirmation_password' => 'required',
        ];

        $validateData = $request->validate($rules);

        if ($validateData['password'] != $validateData['confirmation_password']) {
            return back()->with('update-failed', 'Password anda tidak sama. Mohon cek dengan teliti')->withInput();
        }
        $validateData['phone_number'] = str_replace('+62', '0', $validateData['phone_number']);
        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['is_completed'] = 1;
        $user->update($validateData);
        return redirect('/user');
    }
}
