<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{

    public function index()
    {
        //apresentar a view inicial da aplicação
        return view('index');
    }

    public function enviarPrimeiroEmail()
    {
        return 'OK';
    }
}
