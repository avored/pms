<?php

namespace AvoRed\Base\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Menu extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'menu';
    }
}
