@extends('layouts.admin')

@section('main-title','Create Project Priority')
@section('content')
    <div class="row">
        @include('mage2setup::setup.sidebar')

        <div class="col-md-9">

            {!! Form::open(['route' => 'setup.project-priority.store']) !!}

            @include('mage2setup::project-priority._fields')
            <div>
                {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop