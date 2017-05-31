@extends('layouts.admin')

@section('main-title','Project Priority')

@section('content')

        <div class="row">

            <div class="col-md-12">
                <div class="pull-right">
                    <span><a class="btn btn-primary btn-raised pull-right"
                             href="{{ route('setup.project-priority.create') }}">Create</a></span>
                </div>


                <hr/>
                <div class="clearfix"></div>

                <table class="table table-bordered" id="project-priority-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
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
        $('#project-priority-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('setup.project-priority.datatables.data') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},

                {
                    data: 'view',
                    name: 'view',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/setup/project-priority/' + object.id + '">view</a>';
                    }
                },
                {
                    data: 'edit',
                    name: 'edit',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/setup/project-priority/' + object.id + '/edit">Edit</a>';
                    }
                },
                {
                    data: 'destroy',
                    name: 'destroy',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<form id="project-priority-destroy-' + object.id + '" method="post"  action="/setup/project-priority/' + object.id + '" ><input type="hidden" name="_method" value="DELETE"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/> </form> <a onclick="event.preventDefault();jQuery(\'#project-priority-destroy-' + object.id + '\').submit()"  href="/setup/project-priority/' + object.id + '">Destroy</a>';
                    }
                }
            ]
        });
    });
</script>
@endpush