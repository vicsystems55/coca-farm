<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //

    public function sendMessage(Request $request){

        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required'

        ]);

        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,

        ];

        Mail::to('info@udonyenweakufarm.com')->send(new ContactFormMail($data));



        return back()->with('msg', 'Message Sent Successfullly');
    }
}
