<div id='editProjectTask{{ $task->id }}' class="taskmodel modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::bind($task, ['method' => 'PUT', 
                                    'action' => route('project.task.update',[
                                                                            'projectId' => $projectId,
                                                                            'id' => $task->id])]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Project Task</h4>
            </div>
            <div class="modal-body">
                {!! Form::text('title','Task Title')  !!}
                {!! Form::textarea('content','Task  Content')  !!}
                {!! Form::select('task_status_id','Task Status', 
                                $taskStatusOptions,
                                ['class' => 'form-control task-status', 'id' => 'editTask' . $task->id])  !!}
            </div>
            <div class="modal-footer">
                {!! Form::button('Close',['data-dismiss' => 'modal' , 'class' => 'btn btn-default']) !!}
                {!! Form::submit('Edit Project Task') !!}
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->