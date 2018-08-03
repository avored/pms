@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('account.profile._sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
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
