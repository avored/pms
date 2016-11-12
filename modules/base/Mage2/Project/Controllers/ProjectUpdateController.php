<?php

namespace Mage2\Project\Controllers;

use Mage2\Project\Requests\ProjectUpdateRequest;
use Mage2\System\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mage2\Project\Models\ProjectUpdate;

class ProjectUpdateController extends Controller {

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
     * @param  \Mage2\Project\Requests\ProjectUpdateRequest $request
     * @param  integer $projectId
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectUpdateRequest $request, $projectId) {
        $request->merge(['admin_user_id' => Auth::user()->id,'project_id' => $projectId]);
        ProjectUpdate::create($request->all());
        
        return redirect()->back()->with('notificationText', 'Project Updates Addess Successfully!!');
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
     * @param  \Mage2\Project\Requests\ProjectUpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
