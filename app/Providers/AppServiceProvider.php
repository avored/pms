<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Menu\Menu;
use App\Supports\Facades\Menu as MenuFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMenu();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

     /**
     * Register the Menus.
     *
     * @return void
     */
    protected function registerMenu()
    {
        MenuFacade::make('project', function (Menu $menu) {
            $menu->label('Project')
            ->route('project.index');
        });
    }
}
