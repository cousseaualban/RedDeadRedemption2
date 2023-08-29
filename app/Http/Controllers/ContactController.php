<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ];

        Mail::to('cousseaualban@gmail.com')->send(new ContactMail($details));
        return back()->with('message_envoye', 'Votre message a été envoyé avec succès');
    }
}