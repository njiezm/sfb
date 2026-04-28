<?php

namespace App\Mail;

use App\Models\Prospect;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RecapToProspect extends Mailable
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
            subject: 'Votre demande de devis chez Sea Fast Boat',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.recap-prospect',
        );
    }
}
