@extends('layouts.admin')

@section('main-title', $project->name);

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body app-heading">
                    <img class="profile-img" src="{{ asset('images/profile.png') }}">
                    <div class="app-title">
                        <div class="title"><span class="highlight">{{ $project->name }}</span></div>
                        <div class="description">{{ $project->description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-tab">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        <li role="tab1" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tasks</a>
                        </li>
                        <li role="tab3">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Users</a>
                        </li>
                        <li role="tab4">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Setting</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="section">
                                    <div class="section-title">
                                        Task List
                                        <a style="margin-left: 10px"
                                           data-toggle="modal" data-target="#createTask"
                                           href="#" class="btn btn-primary">Create Task</a>
                                    </div>

                                    <div class="section-body">
                                        @include($viewPath)

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">



                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Card</div>
                                <ul class="card-action">
                                    <li class="dropdown">
                                        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-cogs" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                            <li><a href="#">Action 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('mage2project::project.task-modal')

@endsection