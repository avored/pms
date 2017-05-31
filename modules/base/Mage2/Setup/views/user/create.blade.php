@extends('layouts.admin')

@section('main-title','Create User')
@section('content')
    <div class="row">

        <div class="col-md-12">

            {!! Form::open(['route' => 'setup.user.store']) !!}

            @include('mage2setup::user._fields')
            <div>
                {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop