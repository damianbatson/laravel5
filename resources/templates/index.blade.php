<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
=======
@extends('layouts.master')
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c

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

<<<<<<< HEAD
    </head>
    <body ng-app="poolApp">

    <div class="container-fluid">

        <ng-view></ng-view>

    </div>
        
    </body>
</html>
=======
{{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
        <div class="col-lg-12">
            
                <!-- <a href="http://laravel.com" title="Laravel PHP Framework"></a> -->
                <h2 class="projectTitle">Portfolio</h2>
                <li class="Login">{!! HTML::link('auth/login', 'Login') !!}</li>
                @foreach ($projects as $project)
                    <div class="col-sm-6">
                    <div class="col-md-8">
                    <h3 class="projectTitle">{{ $project->exercise }}</h3>
                    <h5>{{ $project->id }}</h5>
                    
                    <p>{{ $project->description }}</p>
                    <p>{!! HTML::link('projects/'.$project->id, 'link to project') !!}</p>
                    
                    </div>
                    <div class="col-md-4"><img class="img-responsive" src="{{ $project->image }}"></div>
                    <hr>
                    </div>
                @endforeach

            
        </div>
{{--     </div>

    <hr>


</div><!-- /.container --> --}}

@stop
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c
