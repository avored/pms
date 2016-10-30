@extends('system.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 main-title-wrap">
                <span class="title">Project Create</span>
            </div>
            <div class="col-md-12">
                {!! Form::open(['method' => 'POST', 'action' => route('projects.store')]) !!}

                {!! Form::text('name', 'Name',['autofocus' => true]) !!}
                {!! Form::textarea('description', 'Description') !!}

                {!! Form::submit('Save') !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection