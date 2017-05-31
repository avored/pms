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
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Task</a>
                        </li>
                        <li role="tab3">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Contact</a>
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
                                    <div class="section-title">Activities</div>
                                    <div class="section-body">
                                        <div class="media social-post">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="../assets/images/profile.png" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <h4 class="title">Scott White</h4>
                                                    <h5 class="timeing">20 mins ago</h5>
                                                </div>
                                                <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>
                                                <div class="media-action">
                                                    <button class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> 2 Like</button>
                                                    <button class="btn btn-link"><i class="fa fa-comments-o"></i> 10 Comments</button>
                                                </div>
                                                <div class="media-comment">
                                                    <input type="text" class="form-control" placeholder="comment...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media social-post">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="../assets/images/profile.png" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <h4 class="title">Scott White</h4>
                                                    <h5 class="timeing">20 mins ago</h5>
                                                </div>
                                                <div class="media-content">
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <div class="attach">
                                                        <a href="#" class="thumbnail">
                                                            <img src="http://placehold.it/100x100" class="img-responsive">
                                                        </a>
                                                        <a href="#" class="thumbnail">
                                                            <img src="http://placehold.it/100x100" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-action">
                                                    <button class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> 2 Like</button>
                                                    <button class="btn btn-link"><i class="fa fa-comments-o"></i> 10 Comments</button>
                                                </div>
                                                <div class="media-comment">
                                                    <input type="text" class="form-control" placeholder="comment...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection