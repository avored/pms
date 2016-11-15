<?php

namespace Mage2\Project\Controllers;

use Mage2\Project\Requests\TaskRequest;
use Mage2\System\Controllers\Controller;
use Mage2\Project\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Project\Requests\TaskRequest $request
     * @param  integer $projectId
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request, $projectId) {
        $request->merge(['admin_user_id' => Auth::user()->id,'project_id' => $projectId]);
        Task::create($request->all());
        
        return redirect()->back()->with('notificationText', 'Task Addess Successfully!!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Project\Requests\TaskRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $projectId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($projectId, $id) {
        Task::destroy($id);
        
        return redirect()->back()->with('notificationText', 'Task Destroy Successfully!!');
    }
}
