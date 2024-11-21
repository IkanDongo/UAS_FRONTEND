angular.module('myApp')
    .controller('NavbarController', function($scope, $location) {
        $scope.isActive = function(route) {
            return $location.path() === route;
        };
    })