
<h5>People</h5>

<div class="pull-right">
    <a href="#" class="btn btn-primary addPeopleModalLink">@todo Add People Modal</a>
</div>
<div class="row">
    <div class="col-md-12">

        @if(count($project->peoples()->count()) <= 0)
        <div class="text-warning"> Sorry No people Found</div>
        @else
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>

                <th>Action</th>
            </tr>
            <?php
            //var_dump($project->peoples()->get());die;
            ?>
            @foreach($project->peoples()->get() as $projectPeople)

            <tr>
                <td>{{ $projectPeople->id}}</td>
                <td>{{ $projectPeople->first_name}}</td>
                <td>{{ $projectPeople->last_name}}</td>

                <td>
                    <a href='{!! route("people.show", $projectPeople->id) !!}' title="View People">View</a> &nbsp;
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>




<div class="modal fade" id="addPeopleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Search & Add People to Project</h4>
                </div>
                <div class="modal-body">
                    <p>Search and Add People to Project</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            
        </div>
    </div>
</div>