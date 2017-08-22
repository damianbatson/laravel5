<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


    <title></title>
        <!--Angulare -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
        <!--Applicazione -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="js/app.js"></script>
        
        <script src="/js/controller/PoolController.js"></script>
        <!-- <script src="js/omni.script.json.js"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> -->
        <link rel="stylesheet" type="text/css" href="css/app.css">


    </head>
    <body ng-app="poolApp">

    <div class="container-fluid">

        <ng-view></ng-view>

    </div>
        
    </body>
</html>
