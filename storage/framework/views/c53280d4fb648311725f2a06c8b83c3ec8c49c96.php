<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="pull-right">
            <a href='/project/create' class="btn btn-primary">Create</a>
            <hr/>
        </div>
        <h5 class="title">Projects</h5>
        
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            
        <?php if(count($projects) <= 0): ?>
            <div class="text-warning"> Sorry No Projects Found</div>
        <?php else: ?>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            <?php foreach($projects as $project): ?>
            <tr>
                <td><?php echo e($project->id); ?></td>
                <td><?php echo e($project->title); ?></td>
                <td>
                    <a href='<?php echo route('project.show', $project->id); ?>' title="View Project">View</a> &nbsp;
                    <a href='<?php echo route('project.edit', $project->id); ?>'>Edit</a> &nbsp;
                    <form  method="post" action="<?php echo route('project.destroy', $project->id); ?>">
                        <input type="hidden" name="_method" value="DELETE" />
                        <?php echo csrf_field(); ?>

                        <a href='#' onclick="jQuery(this).parent('form:first').submit()">Delete</a> &nbsp;
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>