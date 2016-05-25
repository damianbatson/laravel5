<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
<<<<<<< HEAD

    <!-- Bootstrap core CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
=======
      <!-- Bootstrap core CSS -->
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!} --}}
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') !!} --}}
    
    <!-- Add custom CSS here -->
    {!! HTML::style('css/app.css') !!}
    @include('partials/authheader')
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c

  </head>

  <body>

    {{-- @include('partials/nav') --}}
        <div class="container">
      <div class="row">

    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
        {{-- <div class="col-lg-8"> --}}
        @yield('content')
        {{-- </div> --}}
        
      {{-- @include('partials/sidebar') --}}

      {{-- {!! $posts->links() !!} --}}
      
      

      </div>
      <hr>

      @include('partials/footer')
      </div>

    {{-- @include('partials/scripts') --}}
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src=""></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-resource.js"></script>
<script src="/js/app.js"></script>
<script type="js/omni.script.json.js"></script>
<script src="/js/controller/PoolController.js"></script>
<!-- <script src="/js/filters.js"></script> -->
<!-- <script src="/js/services.js"></script> -->
<!-- <script src="app/js/directives.js"></script> -->
<!-- <script type="text/javascript" src="app/lib/js/modernizr.min.js"></script> -->
<!-- <script type="text/javascript" src="app/lib/js/yepnope.1.0.1-min.js"></script> -->
<script type="text/javascript" src=""></script>
<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
  </body>
</html>