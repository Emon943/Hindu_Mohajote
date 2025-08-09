<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
     public $user;
    public $plainPassword;

    public function __construct($user, $plainPassword = null)
    {
        $this->Signup = $Signup;
        $this->plainPassword = $plainPassword;
    }

    public function build()
    {
        return $this->subject('Registration Details')
                    ->markdown('emails.registration')
                    ->with([
                        'name' => $this->Signup->name ?? $this->Signup->email,
                        'registration_no' => $this->Signup->registration_no ?? null,
                        'plainPassword' => $this->plainPassword,
                    ]);
    }
    

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registration Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.registration',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
