<?php

namespace Mage2\User;

use Mage2\Framework\Support\BaseModule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Gate;
use Mage2\User\Policies\AdminUserPolicy;
use Mage2\User\Models\AdminUser;

class Module extends BaseModule
{
      protected $policies = [
        AdminUser::class => AdminUserPolicy::class,
    ];
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
        //$this->mapApiRoutes();
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
        require (__DIR__.  '/routes/web.php');
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
