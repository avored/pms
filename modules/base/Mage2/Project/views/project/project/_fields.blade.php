
{!! Form::text('name', 'Name',['autofocus' => true,'class' => 'form-control']) !!}
{!! Form::textarea('description', 'Description') !!}
{!! Form::select('assign_to_contact_id', 'Assign To', $contactOptions) !!}

{!! Form::date('due', 'Due Date',['class' => 'form-control datepickerduedate']) !!}

<script>
    window.onload = function() {
        jQuery('.datepickerduedate').pickadate({
            formatSubmit: 'yyyy-mm-dd',
            hiddenSuffix: '_date'
        });
    };
</script>