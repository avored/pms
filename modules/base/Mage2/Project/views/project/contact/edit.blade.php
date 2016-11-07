@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Project Edit</span>
        </div>
        <div class="col-md-12">
            {!! Form::bind($project, ['method' => 'PUT', 'action' => route('project.update', $project)]) !!}

            @include('project.project._fields')

            {!! Form::submit('Save') !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection