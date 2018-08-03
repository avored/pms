<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use AvoRed\Base\Facades\Menu as MenuFacade;
use AvoRed\Base\Menu\Menu;

class AppMenuProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register Menu.
     *
     * @return void
     */
    public function registerMenu()
    {
        MenuFacade::add('my_account',function(Menu $menu){
            $menu->key('my_account')
                ->route('my_account.index')
                ->label('My Account');
        });

        $accountMenu = MenuFacade::get('my_account');

       

        $accountMenu->subMenu('my_profile', function(Menu $menu){
            $menu->key('my_profile')
                ->label('My Profile')
                ->route('profile.index');
        });


        $accountMenu->subMenu('logout', function(Menu $menu){
            $menu->key('logout')
                ->label('Logout')
                ->route('logout');
        });
    }



}
