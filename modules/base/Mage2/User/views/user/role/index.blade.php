@extends('system.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3">
        @include('setup._sidebar-nav')
    </div>
    <div class="col-md-9">
        <div class=" main-title-wrap">
            <span class="title">Role List</span>
            <span class="pull-right">
                <a class="btn btn-primary" title="Create Role" href="{{ route('setup.role.create') }}">Create
                    Role</a>
            </span>
        </div>


        <div class="col-md-12">

            @if(count($dataGrid->data) <= 0)
            <p>Sorry No Roles Found</p>
            @else
                {!! $dataGrid->render() !!}

            @endif
        </div>
    </div>
</div>
@endsection