@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <div class="float-left h1">Create Project</div>
                <div class="clearfix"></div>
            </div>
            
            <form method="post" action="{{ route('project.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Store</button>
                    <a class="btn btn-default" href="{{ route('project.index') }}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
