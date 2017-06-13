<div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(['route' => 'project-task.store']) }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create Task</h4>
            </div>
            <div class="modal-body">
                @include('mage2project::task._fields')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" onclick="jQuery(this).parents('form:first').submit()" class="btn btn-primary">Save changes</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@push('scripts')
<script>
    jQuery(document).ready(function() {
        jQuery('.datetimepicker').datetimepicker({format : "DD-MMMM-YYYY"});
    });
</script>
@endpush