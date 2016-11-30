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
        <span class="title">Workflow Type List</span>
        <span class="pull-right">
            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"setup.workflow-type.create"])
            <a class="btn btn-primary" title="Create Workflow Type" href="{{ route('setup.workflow-type.create') }}">
                Create Workflow Type
            </a>
            @endcan
        </span>
    </div>

    <div class="col-md-12">

        @if(count($dataGrid->data) <= 0)
            <p>Sorry No Workflow Type Found</p>
        @else
            {!! $dataGrid->render() !!}
        @endif
    </div>
        </div>
</div>
@endsection