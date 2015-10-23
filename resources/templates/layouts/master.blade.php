<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Bootstrap core CSS -->
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!} --}}
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') !!} --}}
    
    <!-- Add custom CSS here -->
    {!! HTML::style('css/app.css') !!}
    @include('partials/header')

  </head>

  <body>

    {{-- @include('partials/nav') --}}

    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        @yield('content')
        </div>
        
      {{-- @include('partials/sidebar') --}}

      {{-- {!! $posts->links() !!} --}}
      
      {{-- @include('partials/footer') --}}

    {{-- @include('partials/scripts') --}}
  </body>
</html>