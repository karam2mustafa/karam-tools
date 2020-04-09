<?php

namespace Path\Commands;

use Illuminate\Support\ServiceProvider;

class DevPathServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.karam-tools.dev-path', function ($app) {
            return $app['Path\Commands\DevPathCommand'];
        });
        $this->commands('command.karam-tools.dev-path');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
