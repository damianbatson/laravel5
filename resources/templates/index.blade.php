@extends('layouts.master')

@section('content')

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