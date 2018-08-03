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
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('put')

                        @include('partials.forms.input',['name' => 'first_name','label' => 'First Name'])
                        @include('partials.forms.input',['name' => 'last_name','label' => 'Last Name'])
                        @include('partials.forms.input',['name' => 'email','label' => 'Email','attributes' => ['disabled' => true]])

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Update
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
