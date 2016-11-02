
<?php

//dd($dataGrid->model);
?>
<table class="table-grid table table-striped table-responsive ">
<tr>
@foreach($dataGrid->columns as $column)
   
    <th>
        {{ $column['title'] }}
    </th>
@endforeach
</tr>
@foreach($dataGrid->data as $row)
    <tr>
        @foreach($dataGrid->columns as $column)
        <td>
            {{ $row->$column['identifier'] }}
        </td>
        @endforeach
    </tr>
@endforeach
</table>

{!! $dataGrid->data->links() !!}