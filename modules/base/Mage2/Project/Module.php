<?php
/**
 * Mage2
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/gpl-3.0.en.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to ind.purvesh@gmail.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://mage2.website for more information.
 *
 * @author    Purvesh <ind.purvesh@gmail.com>
 * @copyright 2016-2017 Mage2
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3.0
 */

namespace Mage2\Project;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class Module extends ServiceProvider
{



    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    ///protected $defer = true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->mapWebRoutes();
        $this->registerViewPath();
        $this->registerDatabasePath();
        $this->registerViewComposerData();
    }


    public function registerViewComposerData() {

        View::composer(['mage2project::project._fields'], 'Mage2\Project\ViewComposers\ProjectFieldComposer');

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

    protected function registerViewPath()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'mage2project');
    }



    protected function registerDatabasePath()
    {
        $this->loadMigrationsFrom(__DIR__ . DIRECTORY_SEPARATOR. "database" . DIRECTORY_SEPARATOR . 'migration');
    }

    public function getPath()
    {
        return __DIR__;
    }

}
