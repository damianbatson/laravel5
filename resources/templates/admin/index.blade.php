@extends ('layouts.admin')

@section ('content')

	{{-- <div class="container"> --}}
		{{-- <div class="row"> --}}
    		<div class="col-lg-12">

			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">Dashboard</div>
						<div class="panel-body">

						<h2 class="dashboardText">Hello {!! ucwords(Auth::user()->username) !!}</h2>
						<h2 class="dashboardText"> {!! ucwords(Auth::user()->email) !!}</h2>
						{!! HTML::link('auth/logout', 'Logout', array('class' => 'btn btn-success')) !!}
						{!! HTML::linkRoute('projects.index', 'Projects', null, array('class'=>'btn btn-info')) !!}

						</div>

				</div>
			</div>

		<div class="col-md-8"></div> 

		</div>
        
        
{{--     </div>
      
      <hr>
      
      @include('partials/footer')

    </div><!-- /.container --> --}}

@stop