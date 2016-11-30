<?php

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Mage2\Setup\Controllers'], function ($router) {

    Route::resource('/setup/project-status', 'ProjectStatusController', ['as' => 'setup']);
    Route::resource('/setup/task-status', 'TaskStatusController', ['as' => 'setup']);
    Route::resource('/setup/workflow-type', 'WorkflowTypeController', ['as' => 'setup']);
});

