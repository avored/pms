<?php

namespace Mage2\User;

use Mage2\Framework\Support\BaseModule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Gate;
use Mage2\User\Policies\AdminUserPolicy;
use Mage2\User\Models\AdminUser;

class Module extends BaseModule {

    protected $policies = [
        AdminUser::class => AdminUserPolicy::class,
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function register() {
        //$this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->registerViewPath();
        $this->registerPermissions();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() {
        require (__DIR__ . '/routes/web.php');
    }

    public function registerPolicies() {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function registerViewPath() {
        View::addLocation(__DIR__ . "/views");
    }
    
    
    protected function registerPermissions() {
        $permissions = [];
    }

}


