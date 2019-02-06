@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <div class="float-left h1">Projects</div>
                <div class="float-right">
                    <a href="{{ route('project.create') }}" class="btn btn-primary">Create</a>
                </div>

                <div class="clearfix"></div>
            </div>
            
            @if ($projects->count() > 0)
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>
                                {!! $project->editLink() !!}
                                {!! $project->destroyLink() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else 
                <p>Sorry No Projects found</p>
            @endif
        </div>
    </div>
</div>
@endsection
