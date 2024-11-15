<?php

namespace App\Domains\Newsletter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Domains\Newsletter\Model\Newsletter;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Newsletter instance.
     *
     * @var \App\Domains\Newsletter\Model\Newsletter
     */
    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Newsletter $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.mails.newsletter');
    }
}
