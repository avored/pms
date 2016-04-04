
<h5>People</h5>

<div class="pull-right">
    <a href="/project/{{ $project->id }}/task/create" class="btn btn-primary"> Create Task</a>
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
                    <a href='{!! route('people.show', $projectPeople->id) !!}' title="View People">View</a> &nbsp;
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>