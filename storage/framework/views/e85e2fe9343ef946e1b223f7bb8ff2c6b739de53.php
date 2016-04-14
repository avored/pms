<?php
$value = "";
if (isset($project)) {
    $value = $project->title;
}
?>
<?php echo $__env->make('template.textbox',['fieldName' => 'title', 'fieldValue' => $value, 'fieldLabel' => 'Project Title'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php
if (isset($project)) {
    $value = $project->description;
}
?>
<?php echo $__env->make('template.textarea',['fieldName' => 'description', 'fieldValue' => $value, 'fieldLabel' => 'Project Description'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php
$value = "";
if (isset($project)) {
    $value = $project->status;
}
?>
<?php echo $__env->make('template.select',['fieldName' => 'status',
                            'fieldValue' => $value,
                            'fieldLabel' => 'Project Status',
                            'options' => ['ENABLE' => 'Enable','DISABLE' => 'Disable']
                           ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php
$value = "";
if (isset($project)) {
    $value = $project->start_date;
}
?>
<?php echo $__env->make('template.datetime',['fieldName' => 'start_date', 'fieldValue' => $value, 'fieldLabel' => 'Project Start Date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php
$value = "";
if (isset($project)) {
    $value = $project->due_date;
}
?>
<?php echo $__env->make('template.datetime',['fieldName' => 'due_date', 'fieldValue' => $value, 'fieldLabel' => 'Project Due Date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php
        /** todo in_array and bring value as an array
         *
         **/
$value = "";
if (isset($project)) {
    $value = $project->people;
}
?>

<?php echo $__env->make('template.multiselect',['fieldName' => 'status',
                            'fieldValue' => $value,
                            'fieldLabel' => 'Project Status',
                            'options' => $peopleOptions
                           ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--
<div class="form-group<?php echo e($errors->has('people') ? ' has-error' : ''); ?>">
    <label class="col-md-2 control-label">People</label>

    <div class="col-md-8">
        <select name="people[]" class="select2 form-control" multiple="multiple">
            <option  value=''>please select</option>
            <?php foreach($peopleOptions as $id => $peopleName): ?>
                <option <?php echo (in_array($id , $projectPeople)) ? "selected" : ""; ?> value='<?php echo e($id); ?>'><?php echo e($peopleName); ?></option>
            <?php endforeach; ?>
        </select>

        <?php if($errors->has('people')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('people')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>

        -->