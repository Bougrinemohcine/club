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
    public $email01;

    /**
     * Create a new message instance.
     *
     * @param  int  $randomNumber
     * @return void
     */
    public function __construct($randomNumber, $email01)
    {
        $this->randomNumber = $randomNumber;
        $this->email01 = $email01;
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
                    ->with('email01', $this->email01)
                    ->subject('Club Assam ');
    }
}
