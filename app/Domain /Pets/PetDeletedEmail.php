<?php

namespace App\Domain\Pets;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PetDeletedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $petName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($petName)
    {
        $this->petName = $petName['name'];
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.PetDeletedEmail');
    }
}
