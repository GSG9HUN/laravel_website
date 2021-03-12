<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmForUser extends Mailable
{
    use Queueable, SerializesModels;

    public $items;
    public $user_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($items,$user_id)
    {
        $this->items=$items;
        $this->user_id=$user_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.confirm.confirm_for_user')->with("items" ,$this->items);
    }
}
