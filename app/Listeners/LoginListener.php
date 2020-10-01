<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;
use App\Mail\NovoAcesso;
use Illuminate\Support\Facades\Mail;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        info('Logou!');
        // Printa no log do laravel as informações da instancia do user que está no arquivo de Login dentro da Vendor
        info($event->user->name);
        info($event->user->email);

        // user or users[] or email 
        Mail::to($event->user)->send(new NovoAcesso($event->user)); // Mail pra quem ele quer enviar. Nesse caso, o user
    }
}
