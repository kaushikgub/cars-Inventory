<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $subject;
    public $massage;

    public function __construct($name, $email, $subject, $massage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->massage = $massage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        $subject = $this->subject;
        $email = $this->email;
        $massage = $this->massage;
        return $this->view('user-contact-mail-body', compact('name', 'email', 'massage'))->subject($subject);
    }
}
