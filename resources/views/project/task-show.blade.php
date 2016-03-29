<div class="row">
    <div class="col-md-12">

        @if(count($project->tasks()) <= 0)
            <div class="text-warning"> Sorry No Task Found</div>
        @else
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
                @foreach($project->tasks()->get() as $projectTask)
                    <tr>
                        <td>{{ $projectTask->id}}</td>
                        <td>{{ $projectTask->title}}</td>
                        <td>{{ $projectTask->status}}</td>
                        <td>{{ $projectTask->due_date }} </td>
                       <td>
                           Test
                       </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
</div>