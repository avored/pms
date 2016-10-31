@extends('system.layouts.app')

@section('content')

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

                <table class="table table-striped table-responsive ">
                    <tr>
                        <th>Project Name</th>
                        <th>Project Description</th>
                        <th>Edit</th>
                        <th>Destroy</th>
                    </tr>
                    @foreach($projects as $project)
                    <tr>

                        <td>{{ $project->name }}</td>

                        <td>{{ $project->description }}</td>

                        <td>
                            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"project.edit"])
                            <a title="Project Edit" href="{{ route('project.edit', $project) }}">Edit</a>
                            @else
                                <span class="disabledlink">Edit</span>
                            @endcan
                        </td>

                        <td>
                            @can("hasPermission",[\Mage2\User\Models\AdminUser::class,"project.destroy"])
                            {!! Form::open(['method' => 'delete', 'action' => route('project.destroy', $project)]) !!}
                            <a title="Project Destroy"
                               onclick="event.preventDefault();jQuery(this).parents('form:first').submit();"
                               href="#">Destroy</a>
                            {!! Form::close() !!}
                            @else
                                <span class="disabledlink">Destroy</span>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $projects->links() !!}
            @endif
        </div>
    </div>
@endsection