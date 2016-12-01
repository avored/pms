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
                                <?php $class = "col-md-offset-0" ?>

                                @if($loop->count == 2)
                                    <?php $class = 'col-md-offset-1'; ?>
                                @endif


                                <div class="list-group-item">
                                    @include('setup.workflow-type.single-stage',['workflowStage' => $workflowStage,
                                                                                'workflowType' => $workflowType,
                                                                                'class' => $class])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="workflow-stage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {!! Form::open(['action' => route('setup.workflow-stage.store'),'method' => 'POST']) !!}
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Workflow Stage</h4>
                </div>
                <div class="modal-body">

                    {!! Form::text('name','Workflow Stage Name') !!}
                    {!! Form::hidden('previous_stage') !!}
                    {!! Form::hidden('workflow_type_id', $workflowType->id) !!}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery('.workflow-stage-action').on('click', '.workflow-next-stage', function (e) {
                e.preventDefault();
                var id = jQuery(this).attr('data-id')
                jQuery('#workflow-stage form:first')[0].reset();

                jQuery('#workflow-stage form:first').find('[name="previous_stage"]').val(id);
                jQuery('#workflow-stage').modal();


            });

        });


    </script>


@endsection