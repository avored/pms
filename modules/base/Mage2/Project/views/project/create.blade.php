@extends('layouts.admin')

@section('main-title','Create Project')
@section('content')
    <div class="container">



        {!! Form::open(['route' => 'project.store']) !!}

        @include('mage2project::project._fields')
        <div>
            {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop