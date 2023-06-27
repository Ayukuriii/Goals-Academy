<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        return view('auth.email-verification')->with('email-send', 'Selamat Akun anda telah berhasil dibuat. Yuk, satu langkah lagi untuk anda dapat mengakses konten Goals Academy dengan melakukan verifikasi Email. Cek email kamu untuk memverifikasi, jika tidak ada email klik tombol dibawah untuk mengirim kembali tautan email. Terimakasih!');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return view('auth.email-verification')->with('email-verified', 'Email anda telah terverifikasi, selamat datang di Goals Academy!');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('resend', 'Email verifikasi telah dikirim ulang!');
    }
}
