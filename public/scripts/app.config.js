require.config({
  basePath : "../../",
  shim: {
    'angular': {
      exports: 'angular'
    },
    'angular-datatables': [
      'angular'
    ],
    'datatables': [],
    'datatables-bootstrap': [
      'datatables'
    ]
  },
  map: {

  },
  priority: [
    'angular',
    'jquery'
  ],
  paths: {
    'angular2': 'components/angular/angular',
    'angular-datatables': '/components/angular-datatables/dist/angular-datatables',
    'datatables': '/components/datatables/media/js/jquery.dataTables',
    'datatables-bootstrap': '/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap',
    'jquery': '/components/jquery/dist/jquery'
  },
  packages: [

  ]
});