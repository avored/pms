@extends('layouts.admin')

@section('main-title','Edit Project Priority')

@section('content')
    <div class="row">


        <div class="col-md-12">
        {!! Form::model($projectPriority, ['method' => "put",'route' => ['setup.project-priority.update', $projectPriority->id]]) !!}

        @include('mage2setup::project-priority._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection