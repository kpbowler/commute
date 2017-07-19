<?php

namespace Kpbowler\Commute;

use Illuminate\Support\ServiceProvider;

class CommuteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Kpbowler\Commute\Http\Controllers';
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

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require __DIR__.'/Http/routes.php';
        });
    }
}
