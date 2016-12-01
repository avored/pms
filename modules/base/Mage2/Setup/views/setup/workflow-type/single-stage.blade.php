<div class="{{ $class }}">


{{ $workflowStage->name }}
<span class="pull-right">
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-option-vertical"></span>
            </a>
            <ul class="dropdown-menu workflow-stage-action" aria-labelledby="dropdownMenu1">

                <li><a data-id="{{ $workflowStage->id }}"
                       class="workflow-next-stage"
                       href="#">Add Next Stage</a></li>

                <li><a data-id="{{ $workflowStage->id }}"
                       class="workflow-edit-stage"
                       href="#">Edit Stage</a></li>

                <li role="separator" class="divider"></li>

                @if($workflowStage->previos_stage == 0)
                    <li class="disabled"><a href="#">Destroy</a></li>
                @else
                    <li><a href="{{ route('setup.workflow-stage.destroy', $workflowStage->id) }}">Destroy</a></li>
                @endif

            </ul>
        </div>
    </span>
</div>