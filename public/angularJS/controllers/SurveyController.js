/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App.controller("SurveyCtrl", function ($scope, $rootScope, $http, CSRF_TOKEN) {
    //questions
    $scope.submit_value = "Submit";
    $scope.q_name = "Question text";
    $scope.val_txt = '';

    $scope.questions = [{
            q_name: $scope.q_name,
            type_ml: false, //tab_1 type multi chose
            num_ml: 1
        }];

    $scope.addQuestion = function () {
        $scope.questions.push({
            q_name: $scope.q_name
        });
    };

    $scope.removeQuestion = function (item) {
        var index = $scope.questions.indexOf(item);
        $scope.questions.splice(index, 1);
    };


    //question
});

App.filter('num_ml', function() {
  return function(input, total) {
    total = parseInt(total);

    for (var i=0; i<total; i++) {
      input.push(i);
    }

    return input;
  };
});

