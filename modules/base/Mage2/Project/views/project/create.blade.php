@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Category</h1>


        {!! Form::open(['route' => 'project.store']) !!}

        @include('mage2project::project._fields')
        <div>
            {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection