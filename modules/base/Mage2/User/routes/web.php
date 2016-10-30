<?php

Route::group(['middleware' => 'web', 'namespace' => 'Mage2\User\Controllers'], function () {
    // Authentication Routes...
    Route::get('/login', ['as' => 'auth.login','uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


});


Route::group(['middleware' => ['web','auth'], 'namespace' => 'Mage2\User\Controllers'], function () {
    // My Accounts Routes...
    Route::get('/my-account',       ['as' => 'my-account.index','uses' => 'MyAccountController@index']);
    Route::get('/my-account/edit',  ['as' => 'my-account.edit','uses' => 'MyAccountController@edit']);
    Route::post('/my-account/',     ['as' => 'my-account.update','uses' => 'MyAccountController@update']);
    
     Route::resource('/role', 'RoleController');
});