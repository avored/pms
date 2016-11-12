<div class="col-md-12">
     {!! Form::open(['method' => 'POST', 'action' => route('project.update.store',$project->id)]) !!}

        <div class="share">
            <div class="panel panel-default">
                <div class="panel-heading">Project Updates</div>
                <div class="panel-body">
                    <div class="form-group">
                    <textarea name="content"
                              cols="40" rows="10" id="status_message"
                              class="form-control message" style="height: 62px; overflow: hidden;"
                              placeholder="Any Updates with this Project?"></textarea>
                    </div>
                </div>
                <div class="panel-footer">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Add Updates</button>
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
            <span class="pull-right">
                <small>Created By: {{ $projectUpdate->adminuser->name}}</small>
            </span>
            <div class="clearfix"></div>
        </div>
    </div>
    @endforeach
    
</div>
