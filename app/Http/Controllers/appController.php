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
        Mail::to('emailenviotestehub@gmail.com')->send(new mailPrimeiro());
        return 'Email Enviado';
    }
}
