@extends('layouts.admin')

@section('main-title','Edit Project')

@section('content')
    <div class="container">

        {!! Form::model($project, ['method' => "put",'route' => ['project.update', $project->id]]) !!}

        @include('mage2project::project._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection