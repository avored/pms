@extends('system.layouts.app')

@section('content')

<div class="row">

</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-3">
            <img src="http://placehold.it/250x250" class="img-responsive" />
        </div>
        <div class="col-md-9">
            
                <h1>{{ $project->name }}</h1>
                
                <p>Description:</p>
                <p>{{ $project->description }}</p>
                
                <p>Assign To Contact:</p>
                <p>{{ $project->getAssignToContactName()}}</p>
                
                <div class="col-md-6">
                    <p>Due Date:</p>
                    <p>{{ $project->due_date->format('d-M-Y') }}</p>
                </div>
                
                <div class="col-md-6">
                    <p>Status:</p>
                    <p>{{ $project->getStatusName() }}</p>
                </div>
                
        </div>
    </div>


    <div class="col-md-12">
        
    </div>
</div>
@endsection