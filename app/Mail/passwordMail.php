<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class passwordMail extends Mailable
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

        return $this->from('Driving School website', 'School')
            ->subject('Reset Password')
            ->view('email.passwordMail')->
            with('data', $this->data);

    }
}