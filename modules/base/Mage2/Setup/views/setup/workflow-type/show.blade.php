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
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $workflowType->name }} Stage Tree
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                @foreach($workflowStage->getRootStagesByTypeId($workflowType->id) as $workflowStage)
                                
                                @include('setup.workflow-type.single-stage',['workflowStage' => $workflowStage])
                             
                                @endforeach
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection