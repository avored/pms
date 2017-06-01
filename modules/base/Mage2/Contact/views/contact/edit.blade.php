@extends('layouts.admin')

@section('main-title','Edit Contact')

@section('content')
    <div class="container">

        {!! Form::model($contact, ['method' => "put",'route' => ['contact.update', $contact->id]]) !!}

        @include('mage2contact::contact._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection