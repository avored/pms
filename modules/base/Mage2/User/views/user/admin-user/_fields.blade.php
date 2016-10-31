
{!! Form::text('first_name', 'First Name',['autofocus' => true]) !!}
{!! Form::text('last_name', 'Last Name') !!}
{!! Form::text('email', 'Email') !!}
{!! Form::select('role_id', 'Admin User Role',$roles) !!}
{!! Form::password('password', 'Password') !!}
{!! Form::password('password_confirmation', 'Confirm Password') !!}
