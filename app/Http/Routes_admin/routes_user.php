<?php

//authencation
Route::get('/login', [
    'as' => 'backend.login',
    'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('/login', [
    'as' => 'backend.process_login',
    'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('/logout', [
    'as' => 'backend.logout',
    'uses' => 'Auth\AuthController@logout'
]);

//register
Route::get('/users/create', [
    'as' => 'user.create',
    'uses' => 'UserController@create'
]);
Route::post('/users/store', [
    'as' => 'user.store',
    'uses' => 'UserController@store'
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/users/index', [
        'as' => 'user.index',
        'uses' => 'UserController@index'
    ]);
    
    Route::get('/users/indexAgl', [
        'as' => 'user.indexAgl',
        'uses' => 'UserController@indexAgl'
    ]);
});
