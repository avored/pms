<?php

namespace AvoRed\Base;

use Illuminate\Support\ServiceProvider;

class AvoRedBaseServiceProvider extends ServiceProvider
{
    protected $providers = [
        \AvoRed\Base\Menu\MenuProvider::class
    ];

    /**
    * Boot the application
    *
    * @return void
    */
    public function boot()
    {
    }

    /**
     * Register the application Classes and Facades and other service
     *
     * @return void
     */
    public function register()
    {
        $this->registerProviders();
    }

    /**
     * Register Other Providers
     *
     * @return void
     */
    public function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }
}
