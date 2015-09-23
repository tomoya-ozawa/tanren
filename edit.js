var app = angular.module('edit', ['ngResource']);

app.controller('blogCtrl', function($scope) {
  $scope.title = 'junkie.xyz';
  $scope.description = 'this is my web log.';
});

app.controller('postCtrl', function($scope, $resource) {
  var data = $resource('get.php');
  $scope.get = data.query();
});
