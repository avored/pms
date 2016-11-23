<?php

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Mage2\Setup\Controllers'], function ($router) {

    Route::resource('/setup/project-status', 'ProjectStatusController', ['as' => 'setup']);
});

