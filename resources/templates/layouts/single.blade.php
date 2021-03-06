<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!} --}}
    {{-- {!! HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') !!} --}}
    {!! HTML::style('css/app.css') !!}


  </head>

  <body>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {!! HTML::link('/', 'Gym Buddy', array('class' => 'navbar-brand')) !!}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>{!! HTML::link('auth/login', 'Login') !!}</li>
            <li>{!! HTML::link('/', 'Logout') !!}</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    
        @yield('content')

      

  </body>
</html>