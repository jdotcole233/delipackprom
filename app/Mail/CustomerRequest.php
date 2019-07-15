<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerRequest extends Mailable
{
    use Queueable, SerializesModels;


    public $company_name, $phone_number, $location, $clientmessage, $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($company_name, $phone_number, $location, $message, $email)
    {
        $this->company_name = $company_name;
        $this->phone_number = $phone_number;
        $this->location = $location;
        $this->clientmessage = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.companyrequest');
    }
}
