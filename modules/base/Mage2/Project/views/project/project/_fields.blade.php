
{!! Form::text('name', 'Name',['autofocus' => true,'class' => 'form-control']) !!}
{!! Form::textarea('description', 'Description') !!}
{!! Form::select('assign_to_contact_id', 'Assign To', $contactOptions) !!}

{!! Form::date('due_date', 'Due Date') !!}