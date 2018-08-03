@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('account.profile._sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    @php 
                    $model = $user;
                    @endphp
                    <form method="post" enctype="multipart/form-data" 
                            action="{{ route('profile.image.store') }}">
                        @csrf
                        @method('put')

                        @include('partials.forms.file',['name' => 'file','label' => 'Profile Image'])
                      
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Upload
                            </button>
                            <a href="{{ route('profile.index') }}" class="btn">Cancel</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
