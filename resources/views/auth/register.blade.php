@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @include('partials.forms.text', ['name' => 'first_name'])
                        @include('partials.forms.text', ['name' => 'last_name'])
                        @include('partials.forms.text', ['name' => 'email', 'attr' => ['type' => 'email']])
                        @include('partials.forms.text', ['name' => 'password', 'attr' => ['type' => 'password']])
                        @include('partials.forms.text', ['name' => 'password_confirmation', 'attr' => ['type' => 'password']])
                        
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
