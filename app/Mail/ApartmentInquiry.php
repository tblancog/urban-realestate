<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Apartment;


class ApartmentInquiry extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $apartment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Apartment $apartment, $user)
    {
        $this->user = $user;
        $this->apartment = $apartment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( $this->user['email'], $this->user['name'])
                    ->view('emails.properties.inquiry')
                    ->subject('[Solicitud de info] '. $this->apartment->title . '/'
                                                    .$this->apartment->building->address)
                    ->with([ 'user'=> $this->user,
                             'apartment'=> $this->apartment ]);
    }
}
