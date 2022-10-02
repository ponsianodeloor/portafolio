<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    public function __construct($data){
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('ponsianodeloor@gmail.com', 'Ponsiano De Loor')
            ->subject($this->data['subject'])
            ->view('mail.send')->with('data', $this->data);
    }
}
