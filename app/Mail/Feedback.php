<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Feedback extends Mailable
{

    use Queueable, SerializesModels;

    public $topic;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.feedback')
            ->subject('Дополнительная информация по теме ' . $this->topic);
    }
}
