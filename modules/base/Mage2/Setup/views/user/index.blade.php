@extends('layouts.admin')

@section('main-title','User')

@section('content')

        <div class="row">
            
            <div class="col-md-12">
                <div class="pull-right">
                    <span><a class="btn btn-primary btn-raised pull-right"
                             href="{{ route('setup.user.create') }}">Create</a></span>
                </div>


                <hr/>
                <div class="clearfix"></div>

                <table class="table table-bordered" id="user-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Destroy</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('setup.user.datatables.data') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'email', name: 'email'},

                {
                    data: 'view',
                    name: 'view',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/setup/user/' + object.id + '">view</a>';
                    }
                },
                {
                    data: 'edit',
                    name: 'edit',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/setup/user/' + object.id + '/edit">Edit</a>';
                    }
                },
                {
                    data: 'destroy',
                    name: 'destroy',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<form id="user-destroy-' + object.id + '" method="post"  action="/setup/user/' + object.id + '" ><input type="hidden" name="_method" value="DELETE"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/> </form> <a onclick="event.preventDefault();jQuery(\'#user-destroy-' + object.id + '\').submit()"  href="/setup/user/' + object.id + '">Destroy</a>';
                    }
                }
            ]
        });
    });
</script>
@endpush