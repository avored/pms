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