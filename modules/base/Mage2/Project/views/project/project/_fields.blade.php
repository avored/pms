
{!! Form::text('name', 'Name',['autofocus' => true,'class' => 'form-control']) !!}
{!! Form::textarea('description', 'Description') !!}
{!! Form::select('assign_to_contact_id', 'Assign To', $contactOptions) !!}

{!! Form::date('due', 'Due Date',['class' => 'form-control datepickerduedate']) !!}

{!! Form::select('status_id', 'Project Status', $projectStatusOptions) !!}
<script>
    window.onload = function() {
        jQuery('.datepickerduedate').pickadate({
            formatSubmit: 'yyyy-mm-dd',
            hiddenSuffix: '_date'
        });
    };
</script>