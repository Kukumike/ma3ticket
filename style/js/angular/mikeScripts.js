
//module and controller create pass model
var calc = angular
        .module('myCalcModule', [])
        .controller('myController', function ($scope) {
            //two data binding..real time data initialization
            $scope.messageSeats = "";

        });
