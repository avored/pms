
<?php 
if(!isset($stageId)) {
    $stageId = 0;
}

while($stages = $project->getChildStages($stageId)) { 

    
    
if($stages->count() <= 0) {
    break;
}
$stageId = $stages->first()->id;
?>
<p>&nbsp;</p>
<div class="row">

<?php
    
    foreach($stages as $stage) {
    ?>
    <div class="col-md-3 col-md-offset-3" style="padding: 10px;background-color: #269abc">
        <?php echo $stage->title; ?>
        <div class=" pull-right dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#" data-toggle="modal" data-id="{{ $stage->id }}" data-title="{{ $stage->title }}" class="editStageLink">Edit</a></li>
                <li><a href="#" data-toggle="modal" data-id="{{ $stage->id }}" class="addStageLink">Add Child</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Delete this and all Below</a></li>
            </ul>
        </div>
    </div>

    <?php } //end foreach?>
</div>
<?php } //end of while ?>



<div class="modal fade" id="editStageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="POST"
                  action="{{ url('/project/' . $project->id. '/stage') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Child</h4>
                </div>
                <div class="modal-body">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>

                        <div class="col-md-8">
                            <input type="title" class="addStageTitle form-control" name="title" value="">
                        </div>
                        <input type="hidden" value="0"  class="addStageId" name="id" />
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="addStageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="POST"
                  action="{{ url('/project/' . $project->id. '/stage') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Child</h4>
                </div>
                <div class="modal-body">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>

                        <div class="col-md-8">
                            <input type="title" class="form-control" name="title" value="">
                        </div>
                        <input type="hidden" value="0"  class="addStageParentId" name="parent_id" />
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>