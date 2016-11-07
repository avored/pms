@extends('system.layouts.app')

@section('content')

<div class="row">

</div>
<div class="row">
    <div class="col-md-12 main-title-wrap">
        <span class="title">Contact List</span>
        <span class="pull-right">
            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"setup.contact.create"])
            <a class="btn btn-primary" title="Create Contact" href="{{ route('setup.contact.create') }}">Create
                Project</a>
            @endcan
        </span>
    </div>


    <div class="col-md-12">

        @if(count($dataGrid->data) <= 0)
        <p>Sorry No Projects Found</p>
        @else
            {!! $dataGrid->render() !!}
        @endif
    </div>
</div>
@endsection