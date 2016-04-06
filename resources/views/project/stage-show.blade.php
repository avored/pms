
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
    <?php
    
    foreach($stages as $stage) {
    ?>
<p>&nbsp;</p>
<div class="row">
    <div class="col-md-3 col-md-offset-3" style="padding: 10px;background-color: #269abc">
        <?php echo $stage->title; ?>
        <div class=" pull-right dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#" data-toggle="modal" data-target="#editModal">Edit</a></li>
                <li><a href="#" data-toggle="modal" data-target="#addModal">Add Child</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Delete this and all Below</a></li>
            </ul>
        </div>
    </div>
</div>
    <?php } //end foreach?>
<?php } //end of while ?>



<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <input type="hidden" value="0" name="parent_id" />
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