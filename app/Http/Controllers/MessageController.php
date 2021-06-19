<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
   public function store()
    {
       $correo = request()->validate([
            'name' => 'required',
            "email" => 'required|email',
            "subject" => 'required',
            'content' => 'required|min:3'
        ]);

        Mail::to('n0tn4m3@gmail.com')->queue(new MessageReceived($correo));

        return back()->with('status','recibimos tu mensaje, te responderemos pronto.');
    }
}
