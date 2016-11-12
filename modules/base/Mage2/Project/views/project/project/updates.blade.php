<div class="col-md-12">
    {!! Form::open(['method' => 'POST', 'action' => route('project.update.store',$project->id)]) !!}

    <div class="share">
        <div class="panel panel-default">
            <div class="panel-heading">Project Updates</div>
            <div class="panel-body">
                {!! Form::textarea('status_message')  !!}

            </div>
            <div class="panel-footer">
                <div class="text-right">
                    {!! Form::submit('Any Update') !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>

<div class="col-md-12">

    @foreach($project->updates as $projectUpdate)

    <div class="panel">
        <div class="panel-body">
            {{ $projectUpdate->content }}
        </div>
        <div class="panel-footer">
            <span class="text-right">
                <small>Created By: {{ $projectUpdate->adminuser->name}}</small>
            </span>
        </div>
    </div>
    @endforeach

</div>
