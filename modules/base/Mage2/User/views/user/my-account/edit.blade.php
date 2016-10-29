@extends('system.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">

                @include('user.my-account._sidebar-nav')
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile Info
                        </div>
                        <div class="panel-body">


                            {{ Form::label() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection