@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('setup._sidebar-nav')
        </div>
        <div class="col-md-9">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Contact Edit</span>
        </div>
        <div class="col-md-12">
            {!! Form::bind($contact, ['method' => 'PUT', 'action' => route('setup.contact.update', $contact)]) !!}

            @include('project.contact._fields')

            {!! Form::submit('Save') !!}

            {!! Form::close() !!}

        </div>
    </div>
    </div>

@endsection