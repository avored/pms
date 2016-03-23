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
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            Info
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            Task
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                            Stages
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                            People
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <h5>Info</h5>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <h5>Task</h5>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <h5>Stages</h5>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <h5>People</h5>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>