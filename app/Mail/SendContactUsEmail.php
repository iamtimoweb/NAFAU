<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactUsEmail extends Mailable implements ShouldQueue

{
    use Queueable, SerializesModels;

    protected $firstname, $lastname, $email, $subject_, $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->email = $data['email'];
        $this->subject_ = $data['subject'];
        $this->message = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
            ->markdown('emails.contact.contact_us_email')
            ->with([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'subject' => $this->subject_,
                'message' => $this->message
            ]);
    }
}
