<?php

namespace App\Listeners;

use App\Events\checkLoanStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class updateLoanStatus
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
     * @param checkLoanStatus $event
     * @return void
     */
    public function handle(checkLoanStatus $event)
    {
        $obj = $event->payment;
        if ($obj->loan->amount == $obj->loan->getAmountPaidAttribute()) {
            $obj->loan()->update(['is_active'=> false]);
        }
    }
}
