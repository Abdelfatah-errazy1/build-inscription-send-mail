<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $content;
    public function __construct()
    {
        $this->content='Bonjour, votre pré-inscription a été effectuée pour participer au 5ème Congrès Maghrébin et 3ème Congrès Marocain de Médecine Nucléaire';
        
    }

   public function build()
    {
        return $this->from('associationmednuc@gmail.com', 'association mednuc')
        ->subject('Confirmation de Pré-Inscription au 5ème Congrès Maghrébin et 3ème Congrès Marocain de Médecine Nucléaire')
        ->view('mails.custom')
        ->with(['content' => $this->content]);
    }

}
