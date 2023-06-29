<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        Session::flash('email-send', 'Selamat akun anda telah terdaftar! Silahkan cek email untuk verifikasi akun anda.');
        return view('auth.email-verification');
    }


    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        Session::flash('email-verified', 'Email anda telah terverifikasi, selamat datang di Goals Academy!');
        return view('auth.email-verification');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('resend', 'Email verifikasi telah dikirim ulang!');
    }
}
