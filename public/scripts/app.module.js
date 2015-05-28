'use strict';

define(function() {
  console.log('hallo');

  require('angular');
  console.log('hallo angular');

  return angular
    .module('app', [
        // 'ngResource',
        // 'ui.bootstrap',
        // 'datatables',
        // 'datatables.bootstrap'
    ], function($interpolateProvider) {
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    });
});