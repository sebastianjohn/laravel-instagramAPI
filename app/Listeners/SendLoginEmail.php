<?php

namespace App\Listeners;

use App\Events\UserLogIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendLoginEmail
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
     * @param  UserLogIn  $event
     * @return void
     */
    public function handle(UserLogIn $event)
    {
        //
    }
}
