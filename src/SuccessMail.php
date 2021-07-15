<?php

namespace Novapex\Shop;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $productName;
    public function __construct($productName)
    {
        //
         $this->productName=$productName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sajidwaseem7863@gmail.com')->view('shopviews::Mail/productMail');
    }
}
