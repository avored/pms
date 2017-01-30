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
                        <ul class="stage-tree">


                            <?php


                            //dd($tree);

                            $traverse = function ($tree, $prefix = '<li class="stage">', $suffix = '</li>') use (&$traverse) {
                                foreach ($tree as $workflowStage) {
                                    echo $prefix . $workflowStage->name . " ";
                                    ?>
                                <div data-toggle="dropdown"  class=" pull-right dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu workflow-stage-action">
                                        <li><a data-id="{{ $workflowStage->id }}"
                                               class="workflow-next-stage"
                                               href="#">Add Next Stage</a>
                                        </li>
                                        <li><a data-id="{{ $workflowStage->id }}"
                                               class="workflow-child-stage"
                                               href="#">Add Child Stage</a>
                                        </li>
                                        <li><a data-id="{{ $workflowStage->id }}"
                                               class="workflow-edit-stage"
                                               href="#">Edit Stage</a>
                                        </li>

                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{ route('setup.workflow-stage.destroy', $workflowStage->id) }}">Destroy</a></li>
                                    </ul>

                                </div>
                                <div class="clearfix"></div>
                                   <?php

                                    $hasChildren = (count($workflowStage->children) > 0);

                                    if ($hasChildren) {
                                        echo '<ul class="child-tree">';
                                    }

                                    $traverse($workflowStage->children);

                                    if ($hasChildren) {
                                        echo '</ul>';
                                    } ?>
                                <?php
                                echo $suffix;
                                }
                            };

                            $traverse($tree);
                            ?>


                        </ul>
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
                    {!! Form::hidden('current_stage') !!}
                    {!! Form::hidden('child_stage') !!}
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


            jQuery('.stage-tree .stage').on('click',function(e){
                e.preventDefault();
                //propStopped( e );
                e.stopPropagation();
                //propStopped( e);

                jQuery(e.target).find('.child-tree:first').toggle('slide');
            });

            jQuery('.workflow-stage-action').on('click', '.workflow-next-stage', function (e) {
                e.preventDefault();
                var id = jQuery(this).attr('data-id')
                jQuery('#workflow-stage form:first')[0].reset();

                jQuery('#workflow-stage form:first').find('[name="current_stage"]').val(id);

                jQuery('#workflow-stage form:first').find('[name="child_stage"]').attr('disabled',true);
                jQuery('#workflow-stage').modal();

            });

            jQuery('.workflow-stage-action').on('click', '.workflow-child-stage', function (e) {
                e.preventDefault();
                var id = jQuery(this).attr('data-id')
                jQuery('#workflow-stage form:first')[0].reset();

                jQuery('#workflow-stage form:first').find('[name="current_stage"]').val(id);

                jQuery('#workflow-stage form:first').find('[name="child_stage"]').attr('disabled',false);
                jQuery('#workflow-stage').modal();

            });

        });


    </script>


@endsection