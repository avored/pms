@extends('system.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 main-title-wrap">
                <span class="title">Project List</span>
                <span class="pull-right">
                    <a class="btn btn-primary" title="Create Project" href="{{ route('projects.create') }}">Create Project</a>
                </span>
            </div>



            <div class="col-md-12">

                @if(count($projects) <= 0)
                    <p>Sorry No Projects Found</p>
                @else

                <table class="table table-striped table-responsive ">
                    <tr>
                        <th>Project Name</th>
                        <td>{{ $projects->name }}</td>
                    </tr>

                    <tr>
                        <th>Project Description</th>
                        <td>{{ $projects->description }}</td>
                    </tr>


                    <tr>
                        <th>Edit</th>
                        <td><a title="Project Edit" href="{{ route('projects.edit', $project) }}">Edit</a> </td>
                    </tr>

                    <tr>
                        <th>Destroy</th>
                        <td><a title="Project Destroy" href="{{ route('projects.destroy', $project) }}">Destroy</a> </td>
                    </tr>
                </table>

                @endif
            </div>
        </div>
    </div>
@endsection