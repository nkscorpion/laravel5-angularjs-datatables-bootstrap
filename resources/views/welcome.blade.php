<!doctype html>
<html>
    <head>
        <title>Time Tracker</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
        <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
        <link rel="stylesheet" href="bower_components/angular-datatables/dist/plugins/bootstrap/dataTables.bootstrap.css">
    </head>
    <body ng-app="app" ng-controller="mainController as vm">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><% vm.test %></a>
                </div>
            </div>
        </nav>

        <div class="container">
          <table datatable="ng" class="row-border hover">
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

    <!-- Application Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="bower_components/angular-resource/angular-resource.js"></script>
    <script type="text/javascript" src="bower_components/moment/moment.js"></script>
    <script type="text/javascript" src="bower_components/angular-datatables/dist/angular-datatables.min.js"></script>
    <script type="text/javascript" src="bower_components/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>

    <!-- Application Scripts -->
    <script type="text/javascript" src="scripts/app.js"></script>
    <script type="text/javascript" src="scripts/controllers/main.controller.js"></script>
    <!-- // <script type="text/javascript" src="scripts/services/time.js"></script> -->
</html>