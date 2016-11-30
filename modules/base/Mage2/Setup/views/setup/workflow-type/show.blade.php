@extends('system.layouts.app')

@section('content')

<div class="row">

</div>
<div class="row">
    <div class="col-md-3">
        @include('setup._sidebar-nav')
    </div>
    <div class="col-md-9">
        <div class="col-md-12 main-title-wrap">
            <span class="title">Please Select Workflow Type</span>
        </div>

        <div class="col-md-12">
                {!! Form::select('workflow_type',
                                'Please Select Workflow Types', 
                                $workflowTypes,
                                ['value' => $workflowType->id,'class' => 'form-control'])
                    !!}
        </div>
    </div>
</div>
@endsection