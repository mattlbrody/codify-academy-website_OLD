var app = angular.module('financingApp', ['ngRoute'])

app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'views/intro.html'
    })
    .when('/info', {
      templateUrl: 'views/info.html'
    })
    .when('/laststep', {
      templateUrl: 'views/laststep.html'
    })
    .when('/congrats', {
      templateUrl: 'views/congrats.html'
    })
    .when('/address', {
      templateUrl: 'views/address.html'
    })
    .otherwise({
      redirectTo: '/'
    })
})
