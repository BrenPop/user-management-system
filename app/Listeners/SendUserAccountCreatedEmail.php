<?php

namespace App\Listeners;

use App\Events\UserAccountCreated;
use App\Mail\UserAccountCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserAccountCreatedEmail implements ShouldQueue
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
    public function handle(UserAccountCreated $event): void
    {
        $userEmail = $event->userEmail;

        Mail::to($userEmail)->send(new UserAccountCreatedMail());
    }
}
