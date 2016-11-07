@extends('system.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-3">

        @include('setup._sidebar-nav')
    </div>
    <div class="col-md-9 ">
        <div class="main-title-wrap">
            <span class="title">Admin User List</span>
            <span class="pull-right">
                @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"setup.admin-user.create"])
                <a class="btn btn-primary" title="Create Admin User" href="{{ route('setup.admin-user.create') }}">Create
                    Admin User</a>
                @endcan
            </span>
        </div>


        <div class="col-md-12">

            @if(count($dataGrid->data) <= 0)
            <p>Sorry No Admin Users Found</p>
            @else

                {!! $dataGrid->render() !!}

            @endif
        </div>
    </div></div>
@endsection