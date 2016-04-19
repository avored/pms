@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="right">
            <a href='/project-type/create' class="btn btn-primary">Create</a>
            <br/>
        </div>
        <p>&nbsp;</p>
        <h5 class="title">Project Types</h5>
        
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            
        @if(count($projectTypes) <= 0)
            <div class="text-warning"> Sorry No Project Types Found</div>
        @else
        <table  class="striped responsive-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Identifier</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projectTypes as $projectType)
            
            <tr>
                <td>{{ $projectType->id}}</td>
                <td>{{ $projectType->identifier}}</td>
                <td>{{ $projectType->first_name}}</td>
                <td>{{ $projectType->last_name}}</td>
                <td>
                    <a href='{!! route('projectType.show', $projectType->id) !!}' title="View Project Type">View</a> &nbsp;
                    <a href='{!! route('projectType.edit', $projectType->id) !!}'>Edit</a> &nbsp;
                    <form  method="post" action="{!! route('projectType.destroy', $projectType->id) !!}">
                        <input type="hidden" name="_method" value="DELETE" />
                        {!! csrf_field() !!}
                        <a href='#' onclick="jQuery(this).parent('form:first').submit()">Delete</a> &nbsp;
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
        </div>
    </div>
@endsection
