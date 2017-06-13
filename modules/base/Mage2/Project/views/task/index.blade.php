
        <table class="table table-bordered" id="task-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Due Date</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Destroy</th>
            </tr>
            </thead>
        </table>
@push('scripts')
<script>
    $(function() {
        $('#task-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('project.task.datatables.data',['project_id' => 1]) !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'due_date', name: 'due_date' },
                {
                    data: 'show',
                    name: 'show',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/project-task/'+ object.id +'">Show</a>';
                    }
                },
                {
                    data: 'edit',
                    name: 'edit',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/project-task/'+ object.id +'/edit">Edit</a>';
                    }
                },
                {
                    data: 'destroy',
                    name: 'destroy',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<form id="project-task-destroy-'+object.id+'" method="post"  action="/project-task/'+object.id+'" >' +
                                '<input type="hidden" name="_method" value="DELETE"/>' +
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}"/>' +
                                '</form>'+
                                '<a     onclick="event.preventDefault();jQuery(\'#project-task-destroy-'+object.id+'\').submit()"  ' +
                                '       href="project/'+object.id+'">' +
                                'Destroy</a>';
                    }
                }
            ]
        });
    });
</script>
@endpush