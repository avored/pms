<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Models\TaskStatus;
use Mage2\Setup\Requests\TaskStatusReqest;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\User\Models\AdminUser;
use Illuminate\Support\Facades\Gate;
use Mage2\System\Controllers\Controller;

class TaskStatusController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $model = new TaskStatus();
        $dataGrid = DataGrid::make($model);

        $dataGrid->addColumn(DataGrid::textColumn('name', 'Status Name', ['sortable' => 'asc']));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.task-status.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                        return "<a href='" . route('setup.task-status.edit', $row->id) . "'>Edit</a>";
                    }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.task-status.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                        return "<form method='post' action='" . route('setup.task-status.destroy', $row->id) . "'>" .
                                "<input type='hidden' name='_method' value='delete'/>" .
                                csrf_field() .
                                '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                                "</form>";
                    }));
        }
        return view('setup.task-status.index')
                        ->with('dataGrid', $dataGrid)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('setup.task-status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\TaskStatusReqest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskStatusReqest $request) {
        
        TaskStatus::create($request->all());

        return redirect()->route('setup.task-status.index')->with('notificationText', 'Task Status Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $taskStatus = TaskStatus::findorfail($id);

        return view('setup.task-status.edit')->with('taskStatus', $taskStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\TaskStatusReqest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskStatusReqest $request, $id) {
        $taskStatus = TaskStatus::findorfail($id);
        $taskStatus->update($request->all());

        return redirect()->route('setup.task-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        TaskStatus::destroy($id);

        return redirect()->route('setup.task-status.index');
    }

}
