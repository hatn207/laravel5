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
Route::get('/',['middleware' => 'auth', function () {
    return view('welcome');
}]);
//Import routes for function setting user
require __DIR__ . '/Routes_admin/routes_user.php';
//Import routes for function setting survey
require __DIR__ . '/Routes_admin/routes_survey.php';
//Import routes for function setting API
require __DIR__ . '/Routes_api/root_api.php';