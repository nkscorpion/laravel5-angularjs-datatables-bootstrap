<!doctype html>
<html>
    <head>
        <title>Time Tracker</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css"> -->
        <link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
        <link rel="stylesheet" href="/components/angular-datatables/dist/plugins/bootstrap/dataTables.bootstrap.css">
    </head>
    <body ng-controller="mainController as vm">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><% vm.test %></a>
                </div>
            </div>
        </nav>

        <div class="container">
          <table datatable="ng" class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>ID</th>
              <th>FirstName</th>
              <th>LastName</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="person in vm.data">
              <td><% person.id %></td>
              <td><% person.firstName %></td>
              <td><% person.lastName %></td>
            </tr>
            </tbody>
          </table>
        </div>
    </body>

    <!-- Application Dependencies
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="/components/datatables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="/components/angular/angular.js"></script>
    <script type="text/javascript" src="/components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="/components/angular-resource/angular-resource.js"></script>
    <script type="text/javascript" src="/components/angular-datatables/dist/angular-datatables.min.js"></script>
    <script type="text/javascript" src="/components/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>

    <!- Application Scripts ->
    <script type="text/javascript" src="scripts/app.js"></script>
    <script type="text/javascript" src="scripts/controllers/main.controller.js"></script>
    <!- // <script type="text/javascript" src="scripts/services/time.js"></script> -->

    <script type="text/javascript" data-main="/scripts/app.main.js" src="/components/requirejs/require.js"></script>
</html>