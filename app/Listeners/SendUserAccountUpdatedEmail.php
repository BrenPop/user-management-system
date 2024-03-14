<?php

namespace App\Listeners;

use App\Events\UserAccountUpdated;
use App\Mail\UserAccountUpdatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserAccountUpdatedEmail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserAccountUpdated $event): void
    {
        $userEmail = $event->userEmail;

        Mail::to($userEmail)->send(new UserAccountUpdatedMail());
    }
}
