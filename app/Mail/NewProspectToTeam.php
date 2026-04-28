<?php

namespace App\Mail;

use App\Models\Prospect;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewProspectToTeam extends Mailable
{
    use Queueable, SerializesModels;

    public $prospect;

    public function __construct(Prospect $prospect)
    {
        $this->prospect = $prospect;
    }

    public function envelope()
    {
        return new Envelope(
            subject: '🚀 Nouveau Lead Sea Fast Boat - ' . $this->prospect->name,
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.team-prospect',
        );
    }
}
