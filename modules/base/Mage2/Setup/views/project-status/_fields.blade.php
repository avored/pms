<div class="form-group {{ ($errors->has('name') ? ' has-error' :'') }}" >
    {{ Form::label('name','Name') }}
    {{ Form::text('name',null,['class' => 'form-control ' ]) }}
    <p class="help-block">
    {{ $errors->first('name') }}
    </p>
</div>