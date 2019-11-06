<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DefaultInquiry extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($this->user);
        return $this->from( $this->user['email'], $this->user['name'])
            ->view('emails.properties.inquiry')
            ->subject('[Solicitud de info]')
            ->with([ 'user'=> $this->user ]);

    }
}
