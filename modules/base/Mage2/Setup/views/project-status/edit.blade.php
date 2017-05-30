@extends('layouts.admin')

@section('main-title','Edit Project Status')

@section('content')
    <div class="row">
        @include('mage2setup::setup.sidebar')

        <div class="col-md-9">
        {!! Form::model($projectStatus, ['method' => "put",'route' => ['setup.project-status.update', $projectStatus->id]]) !!}

        @include('mage2setup::project-status._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection