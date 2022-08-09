<?php

namespace App\Listeners;

use App\Events\Twooted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreHashtags
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
     * @param  \App\Events\Twooted  $event
     * @return void
     */
    public function handle(Twooted $event)
    {
        error_log($event->twoot->twoot_body);
    }
}
