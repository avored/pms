@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="right">
            <a href='/project/create' class="btn btn-primary">Create</a>
            <br/>
        </div>
        <h3 class="title">Projects</h3>
        
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            
        @if(count($projects) <= 0)
            <div class="text-warning"> Sorry No Projects Found</div>
        @else
        <table class="table-responsive striped highlight bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id}}</td>
                <td>{{ $project->title}}</td>
                <td> {{ $project->start_date }}</td>
                <td>{{ $project->due_date }}</td>
                <td>
                    <a href='{!! route('project.show', $project->id) !!}' title="View Project">View</a> &nbsp;
                    <a href='{!! route('project.edit', $project->id) !!}'>Edit</a> &nbsp;
                    <form  method="post" action="{!! route('project.destroy', $project->id) !!}">
                        <input type="hidden" name="_method" value="DELETE" />
                        {!! csrf_field() !!}
                        <a href='#' onclick="jQuery(this).parent('form:first').submit()">Delete</a> &nbsp;
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
        </div>
    </div>
@endsection