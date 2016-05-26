<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
      <!-- Bootstrap core CSS -->
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!} --}}
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') !!} --}}
    
    <!-- Add custom CSS here -->
    {!! HTML::style('css/app.css') !!}



  </head>

  <body>

    @include('partials/header')

    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        @yield('content')
        </div>
        

      
      @include('partials/footer')


      
      

      </div>
      <hr>

      @include('partials/footer')
      </div>

    {{-- @include('partials/scripts') --}}
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
    {!! HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')!!}
  </body>
</html>