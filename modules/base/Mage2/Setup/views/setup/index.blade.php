@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-12">
            <div class="section">
                <div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i> Bio</div>
                <div class="section-body __indent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
            </div>
            <div class="section">
                <div class="section-title"><i class="icon fa fa-book" aria-hidden="true"></i> Education</div>
                <div class="section-body __indent">Computer Engineering, Khon Kaen University</div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12">
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
@endsection