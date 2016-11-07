<?php

namespace Mage2\System;

use Mage2\Framework\Support\BaseModule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class Module extends BaseModule
{
  /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Mage2\System\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->registerViewPath();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require ( __DIR__ . '/routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require  (__DIR__ . '/routes/api.php');
        });
    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function registerViewPath()
    {
        View::addLocation(__DIR__ . "/views");
    }
}
