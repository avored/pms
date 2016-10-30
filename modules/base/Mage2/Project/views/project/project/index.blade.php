@extends('system.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Project List</span>
                <span class="pull-right">
                    <a class="btn btn-primary" title="Create Project" href="{{ route('projects.create') }}">Create
                        Project</a>
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

                        <td><a title="Project Edit" href="{{ route('projects.edit', $project) }}">Edit</a></td>

                        <td>{!! Form::open(['method' => 'delete', 'action' => route('projects.destroy', $project)]) !!}
                            <a title="Project Destroy"
                               onclick="event.preventDefault();jQuery(this).parents('form:first').submit();"
                               href="#">Destroy</a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>

            @endif
        </div>
    </div>
@endsection