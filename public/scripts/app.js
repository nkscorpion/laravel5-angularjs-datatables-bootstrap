
  'use strict';

  var app = angular
    .module('app', [
        'ngResource',
        'ui.bootstrap',
        'datatables',
        'datatables.bootstrap'
    ], function($interpolateProvider) {
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    });
