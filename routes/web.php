<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function() {
    
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('account', 'Account\IndexController@index')->name('my_account.index');

    Route::get('account/profile', 'Account\ProfileController@index')->name('profile.index');

    Route::get('account/profile/edit', 'Account\ProfileController@edit')->name('profile.edit');
    Route::put('account/profile', 'Account\ProfileController@update')->name('profile.update');

    Route::get('account/profile/upload', 'Account\ProfileController@uploadImage')->name('profile.image');
    Route::put('account/profile/upload', 'Account\ProfileController@storeImage')->name('profile.image.store');
});

