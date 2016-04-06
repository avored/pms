<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h4 class="title">Project View</h4>

        <div class="col-md-12">
            <div class="title"><?php echo e($project->title); ?></div>
            <p><?php echo e($project->description); ?></p>

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" >
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            Info
                        </a>
                    </li>
                    <li role="presentation"  >
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            Task
                        </a>
                    </li>
                    <li role="presentation"  class="active">
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                            Stages
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#people" aria-controls="settings" role="tab" data-toggle="tab">
                            People
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="home">
                        <h5>Info</h5>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <h5>Task</h5>
                        <div class="pull-right">
                            <a href="/project/<?php echo e($project->id); ?>/task/create" class="btn btn-primary"> Create Task</a>
                        </div>

                        <?php echo $__env->make('project.task-show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php if(isset($taskCreate) && $taskCreate === true): ?>
                            <?php echo $__env->make('project.task-create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
                        <?php endif; ?>

                    </div>
                    <div role="tabpanel" class="tab-pane active" id="messages">
                        <h5>Stages</h5>
                         <?php echo $__env->make('project.stage-show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="people">


                        <?php echo $__env->make('project.people-show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>