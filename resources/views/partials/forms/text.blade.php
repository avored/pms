<?php 

$attributes = array_merge([], $attr ?? []);
$attributes['name'] = $name;
$label = ucwords(str_replace('_', ' ', $name));

$attributes['type'] = $attributes['type'] ?? 'text';
$attributes['class'] = $attributes['class'] ?? 'form-control';
if ($errors->has($name)) {
    $attributes['class'] = $attributes['class'] . ' is-invalid';
}

?>

<div class="form-group">
    <label>{{ $label }}</label>
    <input
        @foreach ($attributes as $key => $val)
            {{ $key }}="{{ $val }}"
        @endforeach
    >
    @if ($errors->has($name))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>