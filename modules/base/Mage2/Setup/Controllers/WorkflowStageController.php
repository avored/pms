<?php

namespace Mage2\Setup\Controllers;

use Illuminate\Http\Request;
use Mage2\Setup\Models\WorkflowStage;
use Mage2\Setup\Requests\WorkflowStageRequest;
use Mage2\System\Controllers\Controller;
use Mage2\Setup\Models\WorkflowType;

class WorkflowStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $workflowType = WorkflowType::first();
       
        return redirect()->route('setup.workflow-type.show', $workflowType->id);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowStageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkflowStageRequest $request)
    {
        WorkflowStage::create($request->all());
        return redirect()->back()->with('notificationText','Workflow Stage Added Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\WorkflowStageRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkflowStageRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
