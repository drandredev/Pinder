<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MessagesController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required' ,
            'email' => 'required|email',
            'subject' => 'required',
            'content'=> 'required|min:3'
        ],[
            'name,required' => __('Necesito tu nombre')
        ]); 

        //Envio de Email
        Mail::to('contacto@pinder.com')->queue(new MessageReceived($msg));
       
        return redirect()->route('miMascot');
    }

  
}
