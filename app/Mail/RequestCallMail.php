<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestCallMail extends Mailable
{
    use Queueable, SerializesModels;

    public $calldata;
    public function __construct($calldata)
    {
        $this->calldata = $calldata;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return (new Envelope())
            ->subject('Request Call of - ' . $this->calldata['name']);
    }

    /**
     * Get the message content definition.
     */
    public function build(): self
    {
        return $this->view('mail.call')
            ->with('calldata', $this->calldata);
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
