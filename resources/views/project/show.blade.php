@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="title">Project View</h4>

        <div class="col-md-12">
            <div class="title">{{ $project->title }}</div>
            <p>{{ $project->description }}</p>

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" >
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            Info
                        </a>
                    </li>
                    <li role="presentation"  class="active">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            Task
                        </a>
                    </li>
                    <li role="presentation" >
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                            Stages
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#people" aria-controls="settings" role="tab" data-toggle="tab">
                            People
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="home">
                        <h5>Info</h5>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <h5>Task</h5>
                        <div class="pull-right">
                            <a href="/project/{{ $project->id }}/task/create" class="btn btn-primary"> Create Task</a>
                        </div>

                        @include('project.task-show')
                        @if(isset($taskCreate) && $taskCreate === true)
                            @include('project.task-create');
                        @endif

                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <h5>Stages</h5>
                         @include('project.stage-show')
                    </div>
                    <div role="tabpanel" class="tab-pane" id="people">


                        @include('project.people-show')
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
