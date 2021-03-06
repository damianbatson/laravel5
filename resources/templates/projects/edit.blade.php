@extends('layouts.admin')

@section('content')

 <div class="container"> 
     <div class="row"> 
        <div class="col-lg-12">
        <div class="col-md-6">
    {!! Form::model($project, array('method' => 'PATCH', 'route' => array('projects.update', $project->id), 'files'=>true)) !!}
    @if($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
        </div>
    @endif
    <div class="control-group">
        {!! Form::label('exercise', 'Exer') !!}
        {!! Form::text('exercise', Input::old('exercise'), array('class' => 'form-control', 'placeholder' => 'Please insert your postt title here...')) !!}
    </div>
    <div class="control-group">
        {!! Form::label('exercise01', 'Exer01') !!}
        {!! Form::text('exercise01', Input::old('exercise01'), array('class' => 'form-control', 'placeholder' => 'Please insert your postt title here...')) !!}
    </div>
    <div class="control-group">
        {!! Form::label('exercise01_weight', 'Exer01 weight') !!}
        {!! Form::text('exercise01_weight', Input::old('exercise01_weight'), array('class' => 'form-control', 'placeholder' => 'Please insert postt here...')) !!}
    </div>
    <div class="control-group">
        {!! Form::label('exercise01_reps', 'Exer01 reps') !!}
        {!! Form::text('exercise01_reps', Input::old('exercise01_reps'), array('class' => 'form-control', 'placeholder' => 'Please insert your postt here...')) !!}
    </div>
    <br>
    <div class="control-group">
        {!! Form::label('description', 'description') !!}
        {!! Form::textarea('description', Input::old('description'), array('class' => 'ckeditor')) !!}  
    </div>
    <br>
    <div class="control-group">
        {!! Form::label('image', 'This is the main body of your post.') !!}
        {!! Form::file('image', Input::old('image'), array('class' => 'ckeditor')) !!}
    </div>
    <hr>

    <br>
    {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
    {!! link_to_route('projects.index', 'Cancel', null, array('class' => 'btn btn-warning')) !!}
    {!! Form::close() !!}

        </div>
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