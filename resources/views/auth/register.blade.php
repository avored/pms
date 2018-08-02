@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        @include('partials.forms.input',['name' => 'first_name' , 'label' => 'First Name'])
                        @include('partials.forms.input',['name' => 'last_name' , 'label' => 'Last Name'])
                        @include('partials.forms.input',['name' => 'email' , 'label' => 'Email Name'])
                        
                        
                        @include('partials.forms.password',['name' => 'password' , 'label' => 'Password'])
                        @include('partials.forms.password',['name' => 'password_confirmation' , 'label' => 'Confirm Password'])

                    
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
