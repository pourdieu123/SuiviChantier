<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendPasswordMail extends Mailable
{
    public $chefProjet;
    public $password;

    public function __construct($chefProjet, $password)
    {
        $this->chefProjet = $chefProjet;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Vos identifiants de connexion')
                    ->view('emails.chef_projet_password')
                    ->with([
                        'nom' => $this->chefProjet->nom,
                        'email' => $this->chefProjet->email,
                        'password' => $this->password,
                    ]);
    }
}
