@extends('layouts.master')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">Please Login</div>
            <div class="panel-body dashboardText">
				{!! Form::open(['url' => 'auth/login']) !!}
				@if($errors->any())
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					{!! implode('', $errors->all('<li class="error">:message</li>')) !!}
				</div>
				@endif
				<div class="form-group">
				{!! Form::label('email', 'Email Address') !!}
				{!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) !!}
				</div>
				<div class="form-group">
				{!! Form::label('password', 'Password')!!}
				{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
				</div>
				<div class="form-group">
				{!! Form::submit('Login', array('class' => 'btn btn-success')) !!}
				{!! HTML::link('auth/register', 'Register', array('class' => 'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	<div class="col-md-8"></div>
	</div>
        
        
    	</div>
      
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

@stop