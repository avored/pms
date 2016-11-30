@extends('system.layouts.app')

@section('content')

<div class="row">

</div>
<div class="row">
    <div class="col-md-3">
        @include('setup._sidebar-nav')
    </div>
    <div class="col-md-9">
    <div class="col-md-12 main-title-wrap">
        <span class="title">Task Status List</span>
        <span class="pull-right">
            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"setup.task-status.create"])
            <a class="btn btn-primary" title="Create status" href="{{ route('setup.task-status.create') }}">
                Create Task Status
            </a>
            @endcan
        </span>
    </div>

    <div class="col-md-12">

        @if(count($dataGrid->data) <= 0)
            <p>Sorry No Task Status Found</p>
        @else
            {!! $dataGrid->render() !!}
        @endif
    </div>
        </div>
</div>
@endsection