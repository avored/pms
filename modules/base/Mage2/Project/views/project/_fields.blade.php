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
    {{ Form::text('due_date',null,['class' => 'form-control datetimepicker' . ($errors->has('due_date') ? ' has-error' :'')]) }}
    <p class="help-block">
    {{ $errors->first('due_date') }}
    </p>
</div>

<div class="form-group {{ ($errors->has('project_status_id') ? ' has-error' :'') }}">
    {{ Form::label('project_status_id','Project Status') }}
    {{ Form::select('project_status_id',$options,null,['class' => 'form-control']) }}
    <p class="help-block">
        {{ $errors->first('project_status_id') }}
    </p>
</div>

<div class="form-group {{ ($errors->has('project_priority_id') ? ' has-error' :'') }}">
    {{ Form::label('project_priority_id','Project Priority') }}
    {{ Form::select('project_priority_id',$projectPrioritiesOption,null,['class' => 'form-control']) }}
    <p class="help-block">
        {{ $errors->first('project_priority_id') }}
    </p>
</div>

<div class="form-group {{ ($errors->has('assigned_to_user_id') ? ' has-error' :'') }}">
    {{ Form::label('assigned_to_user_id','Project Assigned to User') }}
    {{ Form::select('assigned_to_user_id',$userOptions,null,['class' => 'form-control select2']) }}
    <p class="help-block">
        {{ $errors->first('assigned_to_user_id') }}
    </p>
</div>


@push('scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery('#due_date').datetimepicker({format : "DD-MMMM-YYYY"});
            jQuery('.select2').select2();
        });
    </script>
@endpush
