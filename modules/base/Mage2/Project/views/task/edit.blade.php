{!! Form::model($task, ['method' => "put",'route' => ['project-task.update', $task->id]]) !!}

@include('mage2project::task._fields')
<div class="form-group">
    {!!  Form::submit('Save',['class' => 'btn btn-raised btn-primary']) !!}
</div>
{!! Form::close() !!}
