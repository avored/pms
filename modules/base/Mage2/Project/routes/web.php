<?php

Route::group(['middleware' => ['web','auth'], 'namespace' => 'Mage2\Project\Controllers'], function ($router) {

    Route::resource('/project', 'ProjectController');
    Route::resource('/setup/contact', 'ContactController',['as' => 'setup']);
    Route::resource('/project/{projectId}/update', 'ProjectUpdateController',['as' => 'project']);
    Route::resource('/project/{projectId}/task', 'TaskController',['as' => 'project']);
    
    Route::get('/project/{projectId}/get-task-model/{taskId}', ['as' => 'project.task.get-model', 'uses' => 'TaskController@getTaskModel']);
});

