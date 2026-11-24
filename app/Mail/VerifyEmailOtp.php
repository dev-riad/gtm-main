<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmailOtp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($content)
    {
        $this->data = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fromName = 'Global Tuition Media';
        $fromAddress = 'noreply@tuitionterminal.com.bd';

        return $this->from($fromAddress, $fromName)
                    ->subject('Global Tuition Media')
                    ->view('email.verified_email');
    }


    // email : noreply@tuitionterminal.com.bd
    // pass : Yzu45gid$e
}
