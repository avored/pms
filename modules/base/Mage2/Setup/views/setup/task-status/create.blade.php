@extends('system.layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-3">
                @include('setup._sidebar-nav')
            </div>
            <div class="col-md-9">
            <div class="col-md-12 main-title-wrap">
                <span class="title">Task Status Create</span>
            </div>
            <div class="col-md-12">
                {!! Form::open(['method' => 'POST', 'action' => route('setup.task-status.store')]) !!}
                @include('setup.task-status._fields')

                {!! Form::submit('Save') !!}

                {!! Form::close() !!}

            </div>
            </div>
        </div>

@endsection