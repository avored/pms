@extends('layouts.app')

@section('content')
    <div class="container">

        <div id="profile-page-header" class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/images/user-profile-bg.jpg" alt="user background">
            </div>
            <figure class="card-profile-image">
                <img src="/images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
            </figure>
            <div class="card-content">
                <div class="row">
                    <div class="col s3 offset-s2">
                        <h4 class="card-title grey-text text-darken-4">{{ $project->title }}</h4>

                        <p class="medium-small grey-text">{{ $project->description }}</p>
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">10+</h4>

                        <p class="medium-small grey-text">Tasks</p>
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">{{ $project->peoples()->count() }}</h4>

                        <p class="medium-small grey-text">Peoples</p>
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>

                        <p class="medium-small grey-text">Project Budget</p>
                    </div>

                </div>


                <div class="row">


                    <div class="s12">



                            <!-- Nav tabs -->
                            <ul class="tabs ">
                                <li class="tab">
                                    <a href="#home">
                                        Info
                                    </a>
                                </li>
                                <li class="tab">
                                    <a href="#task">
                                        Task
                                    </a>
                                </li>
                                <li class="tab">
                                    <a href="#stages">
                                        Stages
                                    </a>
                                </li>
                                <li class="tab">
                                    <a href="#people">
                                        People
                                    </a>
                                </li>
                            </ul>

                            <div id="profile-page-content" class="row">
                                <!-- Tab panes -->
                                <div class="s12">
                                    <div role="tabpanel" class="tab-pane" id="home">
                                        <h5>Info</h5>

                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="task">
                                        <h5>Task</h5>

                                        <div class="right">
                                            <a href="/project/{{ $project->id }}/task/create" class="btn btn-primary">
                                                Create Task</a>
                                        </div>
                                        @include('project.task-show')
                                        @if(isset($taskCreate) && $taskCreate === true)
                                            @include('project.task-create');
                                        @endif
                                    </div>

                                    <div role="tabpanel" class="tab-pane active" id="stages">
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
        </div>


    </div>
@endsection
