
  'use strict';

  var app = angular
    .module('app', [
        'ngResource',
        'ui.bootstrap',
        'datatables'
    ], function($interpolateProvider) {
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    });
