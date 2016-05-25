@extends('layouts.admin')

@section('content')

{{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
        <div class="col-lg-12">
@if($projects->count())

    <div class="col-sm-6 col-md-8">
    
                @foreach($projects as $project)

<<<<<<< HEAD
                <div class="col-sm-12 col-md-12 col-lg-6">
=======
                {{-- <div class="col-sm-12 col-md-12 col-lg-6"> --}}
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c
                <div class="col-sm-12 col-md-8 nopadding">
                    <h3>{!! $project->exercise !!}</h3>
                    <h4>{!! $project->user->username!!}</h4>
                    <h5>{!! $project->created_at !!}</h5>
                    <p>{!! substr($project->description, 0, 120). '[...]'!!}</p>
                    <p>{!! HTML::linkRoute('projects.show', 'Preview', array($project->id), array('class' => 'btn btn-success')) !!}</p>
                    <p>{!! HTML::linkRoute('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) !!}</p>
                    <p>
                        {!! Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 nopadding"><img class="img-responsive" src="{!! $project->image !!}"></div>
                {{-- </div> --}}

                @endforeach

    </div>
    @else
    <div class="alert alert-info col-md-8" style="margin-top: 15px">You currently have no posts</div>
    @endif
<<<<<<< HEAD
<div class="col-md-4">
=======
<div class="col-sm-6 col-md-4">
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c
    <div class="well well-sm projectName">
    {!! link_to_route('projects.create', 'Create a new post', null, array('class' => 'btn btn-primary')) !!}
    <h4 class="projectText">These are your current posts</h4>
    </div>
</div>

        </div>
{{--     </div>

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
            </div>
        </div>
    </footer>

</div><!-- /.container --> --}}

@stop