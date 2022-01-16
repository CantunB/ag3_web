<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Booking Confirmation AG3 Luxury Travel')
                    ->view('emails.booking')
                    ->attach(
                        public_path('booking/'.$this->booking->id.'.pdf'),
                    [
                        'as' => 'ReservacionAg3.pdf',
                        'mime' => 'application/pdf',
                    ]);
                    //->attachFromStorage( public_path('booking/').$this->booking->id.'.pdf', 'ReservacionAg3.pdf', [
                    //    'mime' => 'application/pdf'
                    //]);
       // return $this->view('emails.booking');
    }
}
