@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="right">
            <a href='/people/create' class="btn btn-primary">Create</a>
            <br/>
        </div>
        <p>&nbsp;</p>
        <h5 class="title">Peoples</h5>
        
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            
        @if(count($peoples) <= 0)
            <div class="text-warning"> Sorry No Peoples Found</div>
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
            @foreach($peoples as $people)
            
            <tr>
                <td>{{ $people->id}}</td>
                <td>{{ $people->identifier}}</td>
                <td>{{ $people->first_name}}</td>
                <td>{{ $people->last_name}}</td>
                <td>
                    <a href='{!! route('people.show', $people->id) !!}' title="View People">View</a> &nbsp;
                    <a href='{!! route('people.edit', $people->id) !!}'>Edit</a> &nbsp;
                    <form  method="post" action="{!! route('people.destroy', $people->id) !!}">
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
