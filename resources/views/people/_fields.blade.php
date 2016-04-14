<?php
$value = "";
if (isset($people)) {
    $value = $people->identifier;
}
?>
<!--<div class="form-group{{ $errors->has('identifier') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Identifier</label>

    <div class="col-md-8">
        <input type="identifier" class="form-control" name="identifier" value="{{ $value }}">

        @if ($errors->has('identifier'))
        <span class="help-block">
            <strong>{{ $errors->first('identifier') }}</strong>
        </span>
        @endif
    </div>
</div>-->
<div class="row">
    <div class="input-field col s6">
        <input placeholder="Placeholder" 
               id="identifier" name="identifier" 
               type="text" 
               required aria-required="true"
               data-error="wrong" data-success="right"
               
               
               class="validate">
        <label for="identifier">Identifier</label>
    </div>
</div>

<?php
$value = "";
$fieldName = "first_name";
if (isset($people)) {
    $value = $people->$fieldName;
}
?>
<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">First Name</label>

    <div class="col-md-8">
        <input type="{{  $fieldName }}" class="form-control" name="{{ $fieldName }}" value="{{ $value }}">

        @if ($errors->has($fieldName))
        <span class="help-block">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
        @endif
    </div>
</div>

<?php
$value = "";
$fieldName = "last_name";
if (isset($people)) {
    $value = $people->$fieldName;
}
?>
<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Last Name</label>

    <div class="col-md-8">
        <input type="{{  $fieldName }}" class="form-control" name="{{ $fieldName }}" value="{{ $value }}">

        @if ($errors->has($fieldName))
        <span class="help-block">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
        @endif
    </div>
</div>

<?php
$value = "";
$fieldName = "home_phone";
if (isset($people)) {
    $value = $people->$fieldName;
}
?>
<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Home Phone</label>

    <div class="col-md-8">
        <input type="{{  $fieldName }}" class="form-control" name="{{ $fieldName }}" value="{{ $value }}">

        @if ($errors->has($fieldName))
        <span class="help-block">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
        @endif
    </div>
</div>


<?php
$value = "";
$fieldName = "mobile_phone";
if (isset($people)) {
    $value = $people->$fieldName;
}
?>
<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Mobile Phone</label>

    <div class="col-md-8">
        <input type="{{  $fieldName }}" class="form-control" name="{{ $fieldName }}" value="{{ $value }}">

        @if ($errors->has($fieldName))
        <span class="help-block">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
        @endif
    </div>
</div>


<?php
$value = "";
$fieldName = "email";
if (isset($people)) {
    $value = $people->$fieldName;
}
?>
<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">
    <label class="col-md-2 control-label">Emailst</label>

    <div class="col-md-8">
        <input type="{{  $fieldName }}" class="form-control" name="{{ $fieldName }}" value="{{ $value }}">

        @if ($errors->has($fieldName))
        <span class="help-block">
            <strong>{{ $errors->first($fieldName) }}</strong>
        </span>
        @endif
    </div>
</div>
