<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailContent;

    public function __construct($emailContent)
    {
        $this->emailContent = $emailContent;
    }

    public function build()
    {
        return $this->subject('Your email subject')
                    ->view('emails.your-email-view')
                    ->with([
                        'emailContent' => $this->emailContent,
                    ]);
    }
}
