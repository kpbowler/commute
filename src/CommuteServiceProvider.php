<?php

namespace Kpbowler\Commute;

use Illuminate\Support\ServiceProvider;

class CommuteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
