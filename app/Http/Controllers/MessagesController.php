<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request  $request)
    {

        $message=request()->validate([
        'fullname'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'content'=>'required|min:3',

        ]);

    Mail::to('hosmmer.eduardo@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24H');
    }
}
