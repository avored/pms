<?php

namespace Mage2\Setup;

use Mage2\Framework\Support\BaseModule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Mage2\Framework\Support\Facades\Permission;

class Module extends BaseModule {

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
        ///$this->registerPolicies();
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
        $this->registerViewComposer();

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
        require __DIR__ . '/routes/web.php';
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

  protected function registerViewComposer() {

        View::composer(
            'setup.status._fields', 'Mage2\Setup\ViewComposers\StatusComposer'
        );
    }

    protected function registerPermissions() {
        $permissions = [
            ['title' => 'Project List',     'routes' => 'project.index'],
            ['title' => 'Project Create',   'routes' => "project.create,project.store"],
            ['title' => 'Project Edit',     'routes' => "project.edit, project.update"],
            ['title' => 'Project Destroy',  'routes' => "project.destroy"],
        ];

        foreach ($permissions as $permission) {
            //Permission::add($permission);
        }
    }

}
