/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App.controller("UserCtrl", function ($scope, $rootScope, $http, CSRF_TOKEN) {
    //get users
    var url_get_users = "/users/indexAgl";
    $http.get(url_get_users).
            success(function (response) {
                $scope.users = response;
            }).
            error(function (response) {
                // log error
            });

});

