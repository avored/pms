<div class="list-group nav-stacked">
    <img src="http://placehold.it/250x250" class="img-responsive img-thumbnail" />

    <div class="list-group-item"> <h5>{{ $user->name }}</h5></div>
    <div class="list-group-item">
        <a href="{{ route('my-account.edit') }}">Edit My Account</a>
    </div>
    <div class="list-group-item">
        <a href="">Logout</a>
    </div>
</div>