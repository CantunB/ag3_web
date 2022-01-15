<?php

namespace App\Mail;

use App\Models\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $quotes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Quote $quotes)
    {
        $this->quotes = $quotes;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Cotizacion de Tour AG3 Luxury Travel')
        ->view('emails.quote');
    }
}
