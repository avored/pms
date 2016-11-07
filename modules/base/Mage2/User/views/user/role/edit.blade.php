@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('setup._sidebar-nav')
        </div>
        <div class="col-md-9">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Role Edit</span>
        </div>
        <div class="col-md-12">
            {!! Form::bind($role, ['method' => 'PUT', 'action' => route('setup.role.update', $role)]) !!}

            @include('user.role._fields')

            {!! Form::submit('Save') !!}

            {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection