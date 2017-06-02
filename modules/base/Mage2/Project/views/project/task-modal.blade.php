<div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => 'task.store']) }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create Task</h4>
            </div>
            <div class="modal-body">



                <div class="form-group {{ ($errors->has('name') ? ' has-error' :'') }}" >
                    {{ Form::label('name','Name') }}
                    {{ Form::text('name',null,['class' => 'form-control ' ]) }}
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                </div>

                <div class="form-group {{ ($errors->has('description') ? ' has-error' :'') }}">
                    {{ Form::label('description','Description') }}
                    {{ Form::textarea('description',null,['class' => 'form-control ' . ($errors->has('description') ? ' has-error' :'')]) }}
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                </div>

                <div class="form-group {{ ($errors->has('due_date') ? ' has-error' :'') }}" >
                    {{ Form::label('due_date','Due Date') }}
                    {{ Form::text('due_date',null,['class' => 'form-control datetimepicker ' . ($errors->has('due_date') ? ' has-error' :'')]) }}
                    <p class="help-block">
                        {{ $errors->first('due_date') }}
                    </p>
                </div>

                {{ Form::hidden('project_id',$project->id ) }}


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" onclick="jQuery(this).parents('form:first').submit()" class="btn btn-primary">Save changes</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@push('scripts')
<script>
    jQuery(document).ready(function() {
        jQuery('.datetimepicker').datetimepicker({format : "DD-MMMM-YYYY"});

    });
</script>
@endpush