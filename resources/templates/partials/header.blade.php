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
            <li>{!! HTML::link('auth/register', 'Register') !!}</li>
            {{-- <li>{!! HTML::link('logout', 'Logout') !!}</li> --}}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>