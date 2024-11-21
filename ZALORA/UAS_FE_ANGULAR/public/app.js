// angular-app/public/app.js
angular.module('myApp', ['ngRoute'])
    .config(function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'home.html',
                controller: 'HomeController'
            })
            .when('/about', {
                templateUrl: 'about.html',
                controller: 'AboutController'
            })
            .when('/contact', {
                templateUrl: 'contact.html',
                controller: 'ContactController'
            })
            .otherwise({
                redirectTo: '/'
            });
    })
    .controller('HomeController', function($scope) {
        $scope.message = 'Welcome to Home';
    })
    .controller('AboutController', function($scope) {
        $scope.message = 'Learn more about us';
    })
    .controller('ContactController', function($scope) {
        $scope.message = 'Get in touch with us';
    });
