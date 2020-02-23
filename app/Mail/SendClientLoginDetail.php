<?php

namespace App\Mail;

use App\Project\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendClientLoginDetail extends Mailable
{
    use Queueable;
    use SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Client $user)
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
        return $this->markdown('email.login.client_detail')->subject('Client Login details - '.env('APP_NAME'));
    }
}
