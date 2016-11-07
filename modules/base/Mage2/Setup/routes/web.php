<?php

Route::group(['middleware' => ['web','auth'], 'namespace' => 'Mage2\Setup\Controllers'], function ($router) {

    //Route::get('/setup', ['as' => 'setup.index','uses' => 'SetupController@index']);
});

