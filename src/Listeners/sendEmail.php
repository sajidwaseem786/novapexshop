<?php

namespace Novapex\Shop\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use novapex\Shop\SuccessMail;

class sendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($shop)
    {
        //
       Mail::to("sajidwaseem7860@gmail.com")->send(new SuccessMail($shop->productname));

    }
}
