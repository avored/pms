@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        @include('partials.forms.input',['name' => 'email' , 'label' => 'Email Address'])
                        @include('partials.forms.password',['name' => 'password' , 'label' => 'Password'])

                        <div class="form-group">
                           
                            <div class="form-check">
                                <input 
                                    class="form-check-input" type="checkbox"
                                    name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                           
                        </div>

                        <div class="form-group">
                           
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
