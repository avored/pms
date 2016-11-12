<?php

Route::group(['middleware' => ['web','auth'], 'namespace' => 'Mage2\Project\Controllers'], function ($router) {

    Route::resource('/project', 'ProjectController');
    Route::resource('/setup/contact', 'ContactController',['as' => 'setup']);
    Route::resource('/project/{projectId}/update', 'ProjectUpdateController',['as' => 'project']);
    Route::resource('/project/{projectId}/task', 'TaskController',['as' => 'project']);
});

