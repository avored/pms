<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Menu\Builder;
use App\Services\Menu\Menu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


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
        $this->registerServices();
        $this->app->alias('menu', 'App\Services\Menu\Builder');
    }

        /**
     * Register the Admin Menu instance.
     *
     * @return void
     */
    protected function registerServices()
    {
        $this->app->singleton('menu', function () {
            return new Builder();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['menu', 'App\Services\Menu\Builder'];
    }
}
