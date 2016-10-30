<?php

Route::group(['middleware' => 'web', 'namespace' => 'Mage2\Project\Controllers'], function ($router) {

    Route::resource('/projects', 'ProjectController');
});

