@extends('layouts.admin')

@section('main-title','Edit Project Priority')

@section('content')
    <div class="row">
        @include('mage2setup::setup.sidebar')

        <div class="col-md-9">
        {!! Form::model($projectPriority, ['method' => "put",'route' => ['setup.project-priority.update', $projectPriority->id]]) !!}

        @include('mage2setup::project-priority._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection