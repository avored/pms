<?php

namespace Mage2\Core;

use Illuminate\Support\ServiceProvider;

class Module extends ServiceProvider
{




    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function register()
    {
        //$this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        require __DIR__ . '/routes/web.php';
    }

}
