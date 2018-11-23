<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AmpError;

class AmpErrorProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('Core', function () {
            return new AmpError();
        });
    }
}
