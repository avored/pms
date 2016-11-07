@extends('system.layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-12 main-title-wrap">
                <span class="title">Role Create</span>
            </div>
            <div class="col-md-12">
                {!! Form::open(['method' => 'POST', 'action' => route('setup.role.store')]) !!}
                @include('user.role._fields')

                {!! Form::submit('Save') !!}

                {!! Form::close() !!}

            </div>
        </div>

@endsection