<div class="form-group {{ ($errors->has('first_name') ? ' has-error' :'') }}" >
    {{ Form::label('first_name','First Name') }}
    {{ Form::text('first_name',null,['class' => 'form-control ' ]) }}
    <p class="help-block">
    {{ $errors->first('first_name') }}
    </p>
</div>

<div class="form-group {{ ($errors->has('last_name') ? ' has-error' :'') }}" >
    {{ Form::label('last_name','Last Name') }}
    {{ Form::text('last_name',null,['class' => 'form-control ' ]) }}
    <p class="help-block">
        {{ $errors->first('last_name') }}
    </p>
</div>


@if(!isset($user))

    <div class="form-group {{ ($errors->has('email') ? ' has-error' :'') }}" >
        {{ Form::label('email','Email Address') }}
        {{ Form::text('email',null,['class' => 'form-control ' ]) }}
        <p class="help-block">
            {{ $errors->first('email') }}
        </p>
    </div>



    <div class="form-group {{ ($errors->has('password') ? ' has-error' :'') }}" >
        {{ Form::label('password','Password') }}
        {{ Form::password('password',['class' => 'form-control ' ]) }}
        <p class="help-block">
            {{ $errors->first('password') }}
        </p>
    </div>



    <div class="form-group {{ ($errors->has('password_confirmation') ? ' has-error' :'') }}" >
        {{ Form::label('password_confirmation','Confirm Passowrd') }}
        {{ Form::password('password_confirmation',['class' => 'form-control ' ]) }}
        <p class="help-block">
            {{ $errors->first('password_confirmation') }}
        </p>
    </div>

@endif