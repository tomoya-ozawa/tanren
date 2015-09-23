var app = angular.module('view', ['ngResource']);

app.controller('blogCtrl', function($scope) {
  $scope.title = 'junkie.xyz';
  $scope.description = 'this is my web log.';
});

app.controller('postCtrl', function($scope, $resource) {
  var data = $resource('get.php');
  $scope.get = data.query();
});

app.controller('editCtrl', function($scope, $resource) {
  var editData = $resource('get.php', {post_id:'variable'}, {method:'GET'});
  $scope.edit = editData.query();
});

app.filter('truncate', function() {
  //文字列の長さ指定
  return function(input, strLimit) {
    var truncateSymbol = '…';
    if (strLimit === undefined) {
      var strLimit = 30;
    } else {
      var strLimit = strLimit;
    }

    if (input.length > strLimit) {
      return input.substr(0, strLimit) + truncateSymbol;
    } else if (input === '') {
      return '';
    } else {
      return input;
    }
  };

});
