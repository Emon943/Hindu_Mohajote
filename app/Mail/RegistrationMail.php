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
     public $signup;
    public $plainPassword;

    public function __construct($signup, $plainPassword = null)
    {
        $this->signup = $signup;
        $this->plainPassword = $plainPassword;
    }

    public function build()
    {
        return $this->subject('Registration Details')
                    ->markdown('emails.registration')
                    ->with([
                        'name' => $this->signup->name ?? $this->signup->email,
                        'registration_no' => $this->signup->registration_no ?? null,
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
