
{!! Form::text('name', 'Name',['autofocus' => true]) !!}
{!! Form::textarea('description', 'Description') !!}

@foreach(Permission::all() as $permission)
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">{{ $permission['title'] }}</div>
        <div class="panel-body">
            <p>Switch Here</p>
        </div>
    </div>
</div>
@endforeach
