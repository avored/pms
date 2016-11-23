
<?php 
$contactsProject = [];
$dueDate = "";
if(isset($project)) {
    $contactsProject = $project->contacts->pluck('id')->toArray();
    $dueDate = $project->due_date;
} 
?>



{!! Form::text('name', 'Name',['autofocus' => true,'class' => 'form-control']) !!}
{!! Form::textarea('description', 'Description') !!}
{!! Form::select('assign_to_contact_id', 'Assign To', $contactOptions) !!}

{!! Form::date('due', 'Due Date',[
                            'class' => 'form-control datepickerduedate',
                            'data-value ' => $dueDate
                            ]) !!}

{!! Form::select('project_status_id', 'Project Status', $projectStatusOptions) !!}


{!! Form::select('contact_project[]', 'Project Contacts', 
                                    $contactOptions,
                                    [   'class' => 'form-control select2',
                                        'multiple' => true,
                                        'value' => $contactsProject
                                    ]) !!}
<script>
    window.onload = function() {
        jQuery('.datepickerduedate').pickadate({
            formatSubmit: 'yyyy-mm-dd',
            hiddenSuffix: '_date'
        });
        
    };
</script>