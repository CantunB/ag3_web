<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactRequest $request){
        $contact = $request->all();
        $ccEmails = ['operadoresag3@gmail.com', 'joagi2000@yahoo.com.mx'];
        // Mail::to('cantunberna@gmail.com')->queue(new ContactMail($contact));
        Mail::to('ag3mexico@gmail.com')
        ->cc($ccEmails)
        ->bcc('cantunberna@gmail.com')
        ->queue(new ContactMail($contact));
        return response()->json(['data' => 'Mensaje enviado correctamente'], 201);
    }
}
