<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Models\WorkflowType;
use Mage2\Setup\Requests\WorkflowTypeRequest;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\User\Models\AdminUser;
use Illuminate\Support\Facades\Gate;
use Mage2\System\Controllers\Controller;

class WorkflowTypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $model = new WorkflowType();
        $dataGrid = DataGrid::make($model);

        $dataGrid->addColumn(DataGrid::textColumn('name', 'Status Name', ['sortable' => 'asc']));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.status.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                        return "<a href='" . route('setup.project-status.edit', $row->id) . "'>Edit</a>";
                    }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.status.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                        return "<form method='post' action='" . route('setup.project-status.destroy', $row->id) . "'>" .
                                "<input type='hidden' name='_method' value='delete'/>" .
                                csrf_field() .
                                '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                                "</form>";
                    }));
        }
        return view('setup.project-status.index')
                        ->with('dataGrid', $dataGrid)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('setup.project-status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkflowTypeRequest $request) {
        
        WorkflowType::create($request->all());

        return redirect()->route('setup.project-status.index')->with('notificationText', 'Project Status Created Successfully');
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
        $projectStatus = WorkflowType::findorfail($id);

        return view('setup.project-status.edit')->with('projectStatus', $projectStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowTypeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkflowTypeRequest $request, $id) {
        $projectStatus = WorkflowType::findorfail($id);
        $projectStatus->update($request->all());

        return redirect()->route('setup.project-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        WorkflowType::destroy($id);

        return redirect()->route('setup.project-status.index');
    }

}
