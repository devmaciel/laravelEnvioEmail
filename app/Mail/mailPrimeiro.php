<?php

// Essa é um exemplo de classe que o professor mostra e utiliza a outra.
//do app controller com método send.

//segundo edit, é preciso utilizar pra fazer QUEUE

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailPrimeiro extends Mailable
{
    use Queueable, SerializesModels;

    // public $user;

    //====================================================
    public function __construct()
    {
        // $this->content = $user;
    }

    //====================================================
    public function build()
    {
        // return $this->view('emails.primeiro');
        return $this->view('emails.segundo')
        ->attach(storage_path('app/docs/informacoes.txt'))
        ->attach(storage_path('app/docs/tab_flowerdance.pdf', [
                'as' => 'TAB Flower Dance',
                'mime' => 'application/pdf'
            ]));
    }
}
