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
        </div>
    </div>


    <div class="col-md-12">
        
    </div>
</div>
@endsection