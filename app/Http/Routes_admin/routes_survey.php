<?php

Route::get('/surveys/index',['middleware' => 'auth', function () {
    return View('backend.survey.index');
}]);
