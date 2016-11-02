@extends('system.layouts.app')

@section('content')

<div class="row">
    
</div>
    <div class="row">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Project List</span>
                <span class="pull-right">
                    @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"project.create"])
                    <a class="btn btn-primary" title="Create Project" href="{{ route('project.create') }}">Create
                        Project</a>
                    @endcan
                </span>
        </div>


        <div class="col-md-12">

            @if(count($projects) <= 0)
                <p>Sorry No Projects Found</p>
            @else

                
                    {!! $dataGrid->render() !!}
                    
                   
                
            @endif
        </div>
    </div>
@endsection