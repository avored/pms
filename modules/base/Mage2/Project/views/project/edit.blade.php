@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>


        {!! Form::model($project, ['method' => "put",'route' => ['project.update', $project->id]]) !!}

        @include('mage2project::project._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection