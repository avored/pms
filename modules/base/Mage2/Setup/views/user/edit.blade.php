@extends('layouts.admin')

@section('main-title','Edit User')

@section('content')
    <div class="row">


        <div class="col-md-12">
        {!! Form::model($user, ['method' => "put",'route' => ['setup.user.update', $user->id]]) !!}

        @include('mage2setup::user._fields')
        <div class="form-group">
            {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection