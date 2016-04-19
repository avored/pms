@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> 
       <h4 class="title">{{ $people->first_name }} {{ $people->last_name }}</h4>
       <p> {{ $people->home_phone }} </p>
       <p> {{ $people->mobile_phone }} </p>
       <p> {{ $people->email }} </p>
        <div class="col-md-12">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" >
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            Info
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="home">
                        <h5>Info</h5>
                        
                        
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
