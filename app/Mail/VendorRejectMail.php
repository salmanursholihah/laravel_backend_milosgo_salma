<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VendorRejectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $vendor;

    public function __construct($vendor)
    {
        $this->vendor = $vendor;
    }

    public function build()
    {
        return $this->subject('Vendor Rejected')
            ->view('emails.vendor_reject')
            ->with([
                'vendor' => $this->vendor
            ]);
    }
}
