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

Route::group(['middleware' => 'web', 'namespace' => "Mage2\Core\Controllers"], function () {

    Route::get('/dummy',['as' =>'home','uses' => 'xty@test']);


    Route::get('/', function () {
        return redirect('/admin');
    })->name('home');


});


