<div class="col-md-12">
    {!! Form::open(['method' => 'POST', 'action' => route('project.task.store',$project->id)]) !!}

    <div class="share">
        <div class="panel panel-default">
            <div class="panel-heading">Create Project Task</div>
            <div class="panel-body">
                {!! Form::text('title','Task Title')  !!}
                {!! Form::textarea('content','Task  Content')  !!}
            </div>
            <div class="panel-footer">
                <div class="text-right">
                    {!! Form::submit('Create Project Task') !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>

<div class="col-md-12">

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
                        <li><a href="{{ route('project.task.edit', ['project_id' => $project->id, 'id'  => $task->id]) }}">Edit</a></li>
                        <li><a href="#">Mark as Completed</a></li>
                        
                        <li><a href="#" onclick="jQuery(this).parents('.more-action:first').find('form:first').submit()">Destroy</a></li>
                    </ul>
                    {!! Form::open(['method' => 'delete', 
                            'id' => 'task'. $task->id,
                            'action' => route('project.task.destroy', ['project_id' => $project->id, 'id'  => $task->id])]) !!}    
                    
                    
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

</div>
