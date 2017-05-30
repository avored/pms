@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>
            Projects
            <span><a class="btn btn-primary btn-raised pull-right" href="{{ route('project.create') }}">Create</a></span>
        </h1>


        <hr/>
        <div class="clearfix"></div>

        <table class="table table-bordered" id="project-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Destroy</th>
            </tr>
            </thead>
        </table>


    </div>

@endsection

@push('scripts')
<script>
    $(function() {
        $('#project-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('project.datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },

                {
                    data: 'edit',
                    name: 'edit',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/project/'+ object.id +'/edit">Edit</a>';
                    }
                },
                {
                    data: 'destroy',
                    name: 'destroy',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<form id="project-destroy-'+object.id+'" method="post"  action="/project/'+object.id+'" ><input type="hidden" name="_method" value="DELETE"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/> </form> <a onclick="event.preventDefault();jQuery(\'#project-destroy-'+object.id+'\').submit()"  href="project/'+object.id+'">Destroy</a>';
                    }
                }
            ]
        });
    });
</script>
@endpush