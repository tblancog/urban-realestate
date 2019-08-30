<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Building;


class BuildingInquiry extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $building;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Building $building, $user)
    {
        $this->user = $user;
        $this->building = $building;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( $this->user['email'], $this->user['name'])
                    ->view('emails.properties.inquiry', ['building'=> $this->building ])
                    ->subject('[Solicitud de info] '. $this->building->title . '/'
                                                    .$this->building->address)
                    ->with([ 'user'=> $this->user,
                             'building'=> $this->building ]);
    }
}
