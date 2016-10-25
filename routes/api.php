<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['api']], function () {
    Route::post('register', [
        'uses' => 'Auth\AuthController@register',
    ]);

    Route::post('signin', [
        'uses' => 'Auth\AuthController@signin',
    ]);

    Route::get('user', [
        'uses' => 'UserController@index',
    ]);

//    Route::group(['middleware' => 'jwt.auth'], function () {
//        Route::get('/user', [
//            'uses' => 'UserController@index',
//        ]);
//    });

});
