@extends('layouts.admin')

@section('main-title','Contacts')

@section('content')

    <div class="container">
        <div class="pull-right">
            <span><a class="btn btn-primary btn-raised pull-right" href="{{ route('contact.create') }}">Create</a></span>
        </div>

        <hr/>
        <div class="clearfix"></div>

        <table class="table table-bordered" id="contact-table">
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
@endsection

@push('scripts')
<script>
    $(function() {
        $('#contact-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('contact.datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' },
                {
                    data: 'view',
                    name: 'view',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/contact/'+ object.id +'">view</a>';
                    }
                },
                {
                    data: 'edit',
                    name: 'edit',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<a href="/contact/'+ object.id +'/edit">Edit</a>';
                    }
                },
                {
                    data: 'destroy',
                    name: 'destroy',
                    sortable: false,
                    render: function (data, type, object, meta) {
                        return '<form id="contact-destroy-'+object.id+'" method="post"  action="/contact/'+object.id+'" ><input type="hidden" name="_method" value="DELETE"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/> </form> <a onclick="event.preventDefault();jQuery(\'#contact-destroy-'+object.id+'\').submit()"  href="/contact/'+object.id+'">Destroy</a>';
                    }
                }
            ]
        });
    });
</script>
@endpush