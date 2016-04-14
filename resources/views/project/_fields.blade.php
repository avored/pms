<?php
$value = "";
if (isset($project)) {
    $value = $project->title;
}
?>
@include('template.textbox',['fieldName' => 'title', 'fieldValue' => $value, 'fieldLabel' => 'Project Title'])

<?php
if (isset($project)) {
    $value = $project->description;
}
?>
@include('template.textarea',['fieldName' => 'description', 'fieldValue' => $value, 'fieldLabel' => 'Project Description'])


<?php
$value = "";
if (isset($project)) {
    $value = $project->status;
}
?>
@include('template.select',['fieldName' => 'status',
                            'fieldValue' => $value,
                            'fieldLabel' => 'Project Status',
                            'options' => ['ENABLE' => 'Enable','DISABLE' => 'Disable']
                           ])



<?php
$value = "";
if (isset($project)) {
    $value = $project->start_date;
}
?>
@include('template.datetime',['fieldName' => 'start_date', 'fieldValue' => $value, 'fieldLabel' => 'Project Start Date'])


<?php
$value = "";
if (isset($project)) {
    $value = $project->due_date;
}
?>
@include('template.datetime',['fieldName' => 'due_date', 'fieldValue' => $value, 'fieldLabel' => 'Project Due Date'])


<?php
        /** todo in_array and bring value as an array
         *
         **/
$value = "";
if (isset($project)) {
    $value = $project->people;
}
?>

@include('template.multiselect',['fieldName' => 'status',
                            'fieldValue' => $value,
                            'fieldLabel' => 'Project Status',
                            'options' => $peopleOptions
                           ])

<!--
<div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">People</label>

    <div class="col-md-8">
        <select name="people[]" class="select2 form-control" multiple="multiple">
            <option  value=''>please select</option>
            @foreach($peopleOptions as $id => $peopleName)
                <option <?php echo (in_array($id , $projectPeople)) ? "selected" : ""; ?> value='{{ $id }}'>{{ $peopleName }}</option>
            @endforeach
        </select>

        @if ($errors->has('people'))
            <span class="help-block">
            <strong>{{ $errors->first('people') }}</strong>
        </span>
        @endif
    </div>
</div>

        -->