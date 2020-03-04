<?php

namespace App\Observers;

use App\Domain\Pets\pet;

class PetsObserver
{
     /**
     * Handle the pet
     *
     * @param  \App\Domain\Pet\Pet  $pet
     * @return void
     */
    public function index(Pet $pet)
    {
        dd('hello');
    }

    /**
     * Handle the pet "created" event.
     *
     * @param  \App\Pet  $pet
     * @return void
     */
    public function created(Pet $pet)
    {
        //
    }

    /**
     * Handle the pet "updated" event.
     *
     * @param  \App\Pet  $pet
     * @return void
     */
    public function updated(Pet $pet)
    {
        //
    }

    /**
     * Handle the pet "deleted" event.
     *
     * @param  \App\Domain\Pet   $pet
     * @return void
     */
    public function destroy(Pet $pet)
    {
        dd('foobar');
    }

    /**
     * Handle the pet "restored" event.
     *
     * @param  \App\Pet  $pet
     * @return void
     */
    public function restored(Pet $pet)
    {
        //
    }

    /**
     * Handle the pet "force deleted" event.
     *
     * @param  \App\Pet  $pet
     * @return void
     */
    public function forceDeleted(Pet $pet)
    {
        //
    }
}
