<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(
    ['prefix' => 'ivr'], function () {
        Route::post(
            '/welcome', [
                'as' => 'welcome', 'uses' => 'IvrController@showWelcome'
            ]
        );
        Route::post(
            '/menu-response', [
                'as' => 'menu-response', 'uses' => 'IvrController@showMenuResponse'
            ]
        );
        Route::post(
            '/planet', [
                'as' => 'planet-connection',
                'uses' => 'IvrController@showPlanetConnection'
            ]
        );
    }
);
