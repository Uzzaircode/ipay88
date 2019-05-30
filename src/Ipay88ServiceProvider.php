<?php

namespace Uzzaircode\Ipay88\Providers;

use Illuminate\Support\ServiceProvider;

class Ipay88ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // use default config
        $this->mergeConfigFrom(__DIR__ . '/config/ipay88.php', 'ipay88');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // config
        $this->publishes([

            __DIR__ . '/config/ipay88.php' => config_path('ipay88.php'),

        ], 'config');

    }
}
