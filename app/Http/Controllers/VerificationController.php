<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        return 'mohon verifikasi email anda terlebih dahulu';
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return "email telah diverifikasi, selamat datang";
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return "email verifikasi berhasil dikirim ulang";
    }
}
