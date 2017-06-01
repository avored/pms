@extends('layouts.admin')

@section('main-title','Create Contact')
@section('content')
    <div class="container">



        {!! Form::open(['route' => 'contact.store']) !!}

        @include('mage2contact::contact._fields')
        <div>
            {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop