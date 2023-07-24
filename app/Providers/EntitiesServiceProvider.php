<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Services\Entities;

class EntitiesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Library\Services\Entities', function ($app){
            return new Entities();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
