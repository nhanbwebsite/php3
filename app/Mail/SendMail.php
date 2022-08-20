<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $data = [];
     public $subject;
     public $view;

    public function __construct($data,$subject,$view)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->view = $view;
    }

    /**
     * Build the message.
     *s
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject) ->replyTo('nhanbpc01368@fpt.edu.vn','BNSHOP') ->view($this->view,$this->data);
    }
}
