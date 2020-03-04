<?php

namespace App\Providers;


use App\Observers\PetsObserver;
use App\Domain\Pets\Pet;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Pet::observe(PetsObserver::class);
    }
}
