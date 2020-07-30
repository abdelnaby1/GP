<?php

namespace App\Observers;

use App\Owner;

class OwnerObserver
{
    /**
     * Handle the owner "created" event.
     *
     * @param  \App\Owner  $owner
     * @return void
     */
    public function creating(Owner $owner)
    {
        $owner->api_token = bin2hex(openssl_random_pseudo_bytes(30));
    }


    /**
     * Handle the owner "updated" event.
     *
     * @param  \App\Owner  $owner
     * @return void
     */
    public function updated(Owner $owner)
    {
        //
    }

    /**
     * Handle the owner "deleted" event.
     *
     * @param  \App\Owner  $owner
     * @return void
     */
    public function deleted(Owner $owner)
    {
        //
    }

    /**
     * Handle the owner "restored" event.
     *
     * @param  \App\Owner  $owner
     * @return void
     */
    public function restored(Owner $owner)
    {
        //
    }

    /**
     * Handle the owner "force deleted" event.
     *
     * @param  \App\Owner  $owner
     * @return void
     */
    public function forceDeleted(Owner $owner)
    {
        //
    }
}
