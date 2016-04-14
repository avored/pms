@extends('layouts.app')

@section('content')
    <div class="row">
        <h4 class="title">Create People</h4>
        <div class="col12">
            <form class="form-horizontal" role="form" method="POST" 
                  action="{{ url('/people') }}">
                {!! csrf_field() !!}

                @include('people._fields')

                <div class="form-group">
                    <div class="col8 offset-c2">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
