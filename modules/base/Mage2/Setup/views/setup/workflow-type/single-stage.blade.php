<div class="list-group-item">
    <span class="">{{ $workflowStage->name }}</span>

    <div class="pull-right">
        <div class="dropdown">
            <div class="dropdown-toggle" 
                   id="dropdownMenu1" data-toggle="dropdown">
                <span class="glyphicon glyphicon-option-vertical"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Edit</a></li>
                <li><a href="#">Add Child Stage</a></li>
                <li><a href="#">Add Next Stage</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Destroy</a></li>
            </ul>
        </div>
    </div>
</div>