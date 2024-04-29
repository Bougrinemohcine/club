<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class accepte extends Mailable
{
    use Queueable, SerializesModels;

    public $randomNumber;

    /**
     * Create a new message instance.
     *
     * @param  int  $randomNumber
     * @return void
     */
    public function __construct($randomNumber)
    {
        $this->randomNumber = $randomNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.accep')
                    ->with('randomNumber', $this->randomNumber)
                    ->subject('Club Assam ');
    }
}
