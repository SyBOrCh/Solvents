<?php

namespace App\Mail;

use App\Solvent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SolventWarning extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $solvent;

    public function __construct(Solvent $solvent)
    {
        //
        $this->solvent = $solvent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    return $this->subject($this->solvent->name.' is almost depleted')
		    ->view('emails.warning');
    }
}
