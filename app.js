var app = angular.module('view', ['ngResource']);

app.controller('viewCtrl', function($scope) {
  var list = [
    {name: 'yo'},
    {name: 'jam'}
];
  $scope.ppp = 'aiueo';
  $scope.list = list;
});

app.controller('Mainctrl', function($scope, $resource, $window) {

});
