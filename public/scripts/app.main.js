'use strict';

require([
  'app.module'
], function(app) {

  console.log('app.main.js');
  angular.bootstrap(document, ['app']);
});