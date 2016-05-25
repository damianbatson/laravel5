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

      @include('partials/footer')
      </div>

    {{-- @include('partials/scripts') --}}
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')!!}
    {!! HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')!!}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js')!!}
    {!! HTML::script('app/lib/js/omni.script.json.js')!!}
  </body>
</html>