@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Admin User List</span>
                <span class="pull-right">
                    @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"admin-user.create"])
                    <a class="btn btn-primary" title="Create Admin User" href="{{ route('admin-user.create') }}">Create
                        Admin User</a>
                    @endcan
                </span>
        </div>


        <div class="col-md-12">

            @if(count($adminUsers) <= 0)
                <p>Sorry No Admin Users Found</p>
            @else

                <table class="table table-striped table-responsive ">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Destroy</th>
                    </tr>
                    @foreach($adminUsers as $adminUser)
                    <tr>

                        <td>{{ $adminUser->first_name }}</td>

                        <td>{{ $adminUser->last_name }}</td>
                        <td>{{ $adminUser->role->name }}</td>

                        <td>
                            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"admin-user.edit"])
                            <a title="Admin User Edit" href="{{ route('admin-user.edit', $adminUser) }}">Edit</a>
                            @else
                                <span class="disabledlink">Edit</span>
                            @endcan
                        </td>

                        <td>
                            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"admin-user.destroy"])
                            {!! Form::open(['method' => 'delete', 'action' => route('admin-user.destroy', $adminUser)]) !!}
                            <a title="Project Destroy"
                               onclick="event.preventDefault();jQuery(this).parents('form:first').submit();"
                               href="#">Destroy</a>
                            {!! Form::close() !!}
                            @else
                                <span class="disabledlink">Destroy</span>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>

            @endif
        </div>
    </div>
@endsection