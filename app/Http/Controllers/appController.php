<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Mail\mailPrimeiro;

class appController extends Controller
{

    //====================================================
    public function index()
    {
        //apresentar a view inicial da aplicação
        return view('index');
    }

    //====================================================
    public function enviarPrimeiroEmail()
    {
        // return 'OK';

        // Mail::to('emailenviotestehub@gmail.com')->send(new mailPrimeiro());
        // return 'Email Enviado';

        Mail::send('emails.primeiro', [], function($message){

            //Endereços de email dentro do array, que poderia ser da database
            $enderecos = ['emailenviotestehub@gmail.com'];

            $message->to($enderecos);
            $message->subject('Este é o assunto da mensagem');

        });
    }
}
