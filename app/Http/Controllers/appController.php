<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailPrimeiro;

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
            // $message->cc('jaotestephpmailer@gmail.com'); //carbon copy
            $message->bcc('jaotestephpmailer@gmail.com'); //blind carbon copy
            $message->subject('Este é o assunto da mensagem');

        });
    }

    //============================================================
    public function enviarSegundoEmail()
    {
        //Enviar email com anexo
        //NOVO laravel, precisa utilizar a classe mailabre
        //então esse código aqui não vai funcionar.

        // Mail::queue('emails.segundo', [], function ($message){
        //     $message->to('emailenviotestehub@gmail.com');
        //     $message->subject('Este é o assunto da mensagem com anexo');
        //     $message->attach(url('/informacoes.txt'));
        // });

        // return 'OK';

        //========================================
        //meu método com controller do mailPrimeiro
        //----
        Mail::to('emailenviotestehub@gmail.com')->send(new mailPrimeiro());

        return 'OK';
    }
}
