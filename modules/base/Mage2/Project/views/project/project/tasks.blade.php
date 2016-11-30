<div class="col-md-12">

    <div class="col-md-12">
        <br/>
        <div class="pull-right">
            <a href='#' data-toggle="modal" data-target="#createProjectTask" class="btn btn-primary">Create Projec Task</a>
        </div>
    </div>
    @if(count($project->tasks) == 0)
    <p>
        Sorry No Task for this project yet.
    </p>
    @else 

    <div class="clearfix"></div>
    <br/>
    @foreach($project->tasks as $task)

    <div class="panel">
        <div class="panel-heading">
            {{ $task->title }}
            <span class="pull-right">

                <!-- Single button -->
                <div class="more-action btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"
                               class="task-edit"
                               data-url='{{ route('project.task.get-model', ['project_id' => $project->id, 'id'  => $task->id]) }}'
                               data-id='{{ $task->id }}'
                               >Edit</a></li>
                        <li><a href="#">Mark as Completed</a></li>

                        <li><a href="#" onclick="jQuery(this).parents('.more-action:first').find('form:first').submit()">Destroy</a></li>
                    </ul>
                    {!! Form::open(['method' => 'delete', 
                    'id' => 'task'. $task->id,
                    'action' => route('project.task.destroy', 
                    ['project_id' => $project->id, 'id'  => $task->id])
                    ]) !!}    


                    {!! Form::close() !!}
                </div>

            </span>
        </div>
        <div class="panel-body">
            {{ $task->content }}
        </div>
        <div class="panel-footer">
            <span class="text-right">
                <small>Created By: {{ $task->adminuser->name}}</small>
            </span>

        </div>
    </div>
    @endforeach

    @endif
</div>
<div class="taskModelHtmlList">
    

<div id='createProjectTask' class="taskmodel modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['method' => 'POST', 'action' => route('project.task.store',$project->id)]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Project Task</h4>
            </div>
            <div class="modal-body">
                {!! Form::text('title','Task Title')  !!}
                {!! Form::textarea('content','Task  Content')  !!}
                {!! Form::select('task_status_id','Task Status', $taskStatusOptions)  !!}
            </div>
            <div class="modal-footer">
                {!! Form::button('Close',['data-dismiss' => 'modal' , 'class' => 'btn btn-default']) !!}
                {!! Form::submit('Create Project Task') !!}
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<script>
    jQuery(document).ready(function () {
        jQuery(document).on('click','.task-edit',function (e) {
            e.preventDefault();
            var taskId = jQuery(this).attr('data-id');


            if (typeof jQuery("#editProjectTask" + taskId).html() == 'undefined') {
                var url = jQuery(this).attr('data-url');
                jQuery.ajax({
                    url: url,
                    success: function (response) {
                        jQuery('.taskModelHtmlList').append(response);                     
                        jQuery("#editProjectTask" + taskId).modal();
                    }
                });
            } else {
               jQuery("#editProjectTask" + taskId).modal();
            }
        });

    });



</script>
