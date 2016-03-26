@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="title">Create Task</h4>
        <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" 
                  action="{{ route('task.update', $task->id) }}">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="PUT" />

                @include('task._fields')


                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection
