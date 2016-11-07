@extends('system.layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-12 main-title-wrap">
                <span class="title">Project Create</span>
            </div>
            <div class="col-md-12">
                {!! Form::open(['method' => 'POST', 'action' => route('project.store')]) !!}
                @include('project.project._fields')

                {!! Form::submit('Save') !!}

                {!! Form::close() !!}

            </div>
        </div>

@endsection