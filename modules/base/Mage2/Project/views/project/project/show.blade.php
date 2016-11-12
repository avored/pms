@extends('system.layouts.app')

@section('content')

<div class="row">

</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <h1>{{ $project->name }}</h1>
        </div>
        <div class="col-md-3">
            <div class="img-thumbnail">
                <img src="http://placehold.it/250x250" class="img-responsive" />
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#upload">Upload Project Image</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('project.edit', $project->id) }}">Edit</a>
                </li>

                <li class="list-group-item"><strong>Status: </strong> {{ $project->getStatusName() }}</li>
                <li class="list-group-item"></li>

                <li class="list-group-item"><strong>Due Date: </strong> {{ $project->due_date->format('d-M-Y') }}</li>
                <li class="list-group-item"></li>

                <li class="list-group-item"><strong>Assign To:</strong> {{ $project->getAssignToContactName() }}</li>
                <li class="list-group-item"></li>

                <li class="list-group-item"><strong>Description:</strong></li>
                <li class="list-group-item">{{ $project->description }}</li>
                <li class="list-group-item"></li>

            </ul>
        </div>
        <div class="col-md-9">

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#updates"role="tab" data-toggle="tab">Updates</a></li>
                <li role="presentation"><a href="#tasks" role="tab" data-toggle="tab">Task</a></li>
                <li role="presentation"><a href="#contacts" role="tab" data-toggle="tab">Contacts</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="updates">
                    @include('project.project.updates')
                </div>

                <div role="tabpanel" class="tab-pane" id="tasks">
                    @include('project.project.tasks')
                </div>

                <div role="tabpanel" class="tab-pane" id="contacts">
                    @include('project.project.contacts')
                </div>

            </div>


        </div>
    </div>
</div>
@endsection