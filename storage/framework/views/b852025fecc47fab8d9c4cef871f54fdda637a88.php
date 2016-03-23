<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h4 class="title">Create Project</h4>
        <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" 
                  action="<?php echo e(route('project.update', $project->id)); ?>">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="_method" value="PUT" />

                <?php echo $__env->make('project._fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>