@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Admin User Edit</span>
        </div>
        <div class="col-md-12">
            {!! Form::bind($adminUser, ['method' => 'PUT', 'action' => route('admin-user.update', $adminUser)]) !!}

            @include('user.admin-user._fields')

            {!! Form::submit('Save') !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection