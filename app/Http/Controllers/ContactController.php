<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'user_message' => $request->message,
        ];

        Mail::send('emails.contact', $data, function($mail) use ($data) {
            $mail->to('bryanricky11@gmail.com')
                 ->subject('Contact Form: ' . $data['subject']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}

