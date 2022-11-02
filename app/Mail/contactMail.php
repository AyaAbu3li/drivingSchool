<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datalis;
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {

        return $this->from($this->data['email'], $this->data['name'])
            ->subject($this->data['subject'])
            ->view('email.contactMail')->
            with('data', $this->data);

    }
}
