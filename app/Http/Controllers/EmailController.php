<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request);
        $email = $request->input('email-code');

        // validation

        $data = [
            'message' => 'this is email test.'
        ];

        Mail::send('emails.test', $data, function (Message $message) use ($email) {
            $message->to($email)->subject('Test Email');
        });

        return redirect()->back()->with('success', 'Email sent successfully');
    }
}
