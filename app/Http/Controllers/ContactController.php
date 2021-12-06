<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactRequest $request){
        $message = $request->all();
        Mail::to('cantunberna@gmail.com')->queue(new MessageReceived($message));
        return 'Mensaje Enviado';
    }
}
