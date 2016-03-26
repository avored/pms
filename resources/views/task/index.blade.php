@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="pull-right">
            <a href='/task/create' class="btn btn-primary">Create</a>
            <hr/>
        </div>
        <h5 class="title">Tasks</h5>
        
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            
        @if(count($tasks) <= 0)
            <div class="text-warning"> Sorry No Tasks Found</div>
        @else
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id}}</td>
                <td>{{ $task->title}}</td>
                <td>
                    <a href='{!! route('task.show', $task->id) !!}' title="View Task">View</a> &nbsp;
                    <a href='{!! route('task.edit', $task->id) !!}'>Edit</a> &nbsp;
                    <form  method="post" action="{!! route('task.destroy', $task->id) !!}">
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
</div>
@endsection
