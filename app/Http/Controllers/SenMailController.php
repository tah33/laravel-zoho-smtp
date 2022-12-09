<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class SenMailController extends Controller
{
    public function sendMail()
    {
        Mail::send('email',[],function($message) {
            $message->to('16103119@iubat.edu')->subject('Zoho SMTP Testing');
        });
        dd('Mail Send Successfully');
    }
}
