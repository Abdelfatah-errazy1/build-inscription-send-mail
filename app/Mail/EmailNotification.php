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
        $this->content='content abdelfath';
        
    }

   public function build()
    {
        return $this->from('errazy.abdelfatah@gmail.com', 'abdou')
        ->subject('Custom Email Subject')
        ->view('mails.custom')
        ->with(['content' => $this->content]);
    }

}
