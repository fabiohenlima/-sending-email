<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TriggerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $recipient;
    public $subject;
    public $texts;
    public $firedOn;
    public function __construct($recipient,$subject,$message)
    {
        date_default_timezone_set('America/Fortaleza');
        $this->recipient = $recipient;
        $this->subject   = $subject;
        $this->texts     = $message;
        $this->firedOn   = date('d/m/Y H:i:s');
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from(env('MAIL_USERNAME'),'FábioSystms')
        // ->replyTo(['laecio@gmail','henrique@gmail'],['laecio','henrique'])
        ->subject($this->subject)
        ->view('sent.mail');
        // ->with(['message' => $this->message,
        //         'subject' => $this->subject]);
    }
}

