<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Models\WorkflowType;
use Mage2\Setup\Requests\WorkflowTypeRequest;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\User\Models\AdminUser;
use Illuminate\Support\Facades\Gate;
use Mage2\Setup\Models\WorkflowStage;
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

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.workflow-type.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                        return "<a href='" . route('setup.workflow-type.edit', $row->id) . "'>Edit</a>";
                    }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.workflow-type.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                        return "<form method='post' action='" . route('setup.workflow-type.destroy', $row->id) . "'>" .
                                "<input type='hidden' name='_method' value='delete'/>" .
                                csrf_field() .
                                '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                                "</form>";
                    }));
        }
        return view('setup.workflow-type.index')
                        ->with('dataGrid', $dataGrid)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('setup.workflow-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkflowTypeRequest $request) {
        
        WorkflowType::create($request->all());

        return redirect()->route('setup.workflow-type.index')->with('notificationText', 'Workflow Type Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $workflowTypes  = WorkflowType::all()->pluck('name','id');
        $workflowType   = WorkflowType::findorfail($id);
        $workflowStage  = new WorkflowStage();
        
        return view('setup.workflow-type.show')
                    ->with('workflowType', $workflowType)
                    ->with('workflowTypes', $workflowTypes)
                    ->with('workflowStage', $workflowStage)
                ;
    }       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $workflowType = WorkflowType::findorfail($id);

        return view('setup.workflow-type.edit')->with('workflowType', $workflowType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowTypeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkflowTypeRequest $request, $id) {
        $workflowType = WorkflowType::findorfail($id);
        $workflowType->update($request->all());

        return redirect()->route('setup.workflow-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        WorkflowType::destroy($id);

        return redirect()->route('setup.workflow-type.index');
    }

}
