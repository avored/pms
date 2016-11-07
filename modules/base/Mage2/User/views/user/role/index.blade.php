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

            @if(count($roles) <= 0)
            <p>Sorry No Roles Found</p>
            @else

            <table class="table table-striped table-responsive ">
                <tr>
                    <th>Role Name</th>
                    <th>Role Description</th>
                    <th>Edit</th>
                    <th>Destroy</th>
                </tr>
                @foreach($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ $role->description }}</td>

                    <td><a title="Role Edit" href="{{ route('setup.role.edit', $role) }}">Edit</a></td>

                    <td>{!! Form::open(['method' => 'delete', 'action' => route('setup.role.destroy', $role)]) !!}
                        <a title="Role Destroy"
                           onclick="event.preventDefault();
                                   jQuery(this).parents('form:first').submit();"
                           href="#">Destroy</a>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>

            @endif
        </div>
    </div>
</div>
@endsection