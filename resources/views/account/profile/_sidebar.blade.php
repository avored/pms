<ul class="list-group">

    <a class="list-group-item" href="#">
        <img src="{{ asset($user->path) }}" class="img-thumbnail img-fluid" />
    </a>
    <a class="list-group-item" href="{{ route('profile.edit') }}">
        Edit Profile
    </a>
    <a class="list-group-item" href="{{ route('profile.image') }}">
        Uplaod Image
    </a>

    <a class="list-group-item" href="{{ route('logout') }}">
        Logout
    </a>
</ul>