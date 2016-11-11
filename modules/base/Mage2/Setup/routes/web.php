<?php

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Mage2\Setup\Controllers'], function ($router) {

    Route::resource('/setup/status', 'StatusController', ['as' => 'setup']);
});

