'use strict';

app
  .controller('mainController', ['$http', function($http) {
    var vm = this;

    vm.test= 'hello!';

    $http.get('/data.json')
      .success(function(data, status, headers, config) {
        vm.data = data;
      });

  }]);
