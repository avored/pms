<?php

namespace Mage2\Framework\Foundation\Providers;

use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider as LaravelConsoleServiceProvider;

class ConsoleServiceProvider extends LaravelConsoleServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        //'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        //'Illuminate\Console\ScheduleServiceProvider',
        //'Illuminate\Database\MigrationServiceProvider',
        //'Illuminate\Database\SeedServiceProvider',
        'Illuminate\Foundation\Providers\ComposerServiceProvider',
        //'Illuminate\Queue\ConsoleServiceProvider',
        'Mage2\Framework\Database\MigrationServiceProvider',
    ];
}
