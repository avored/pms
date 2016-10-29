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

                            <table class="table table-striped table-responsive ">
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $user->first_name }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ $user->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection