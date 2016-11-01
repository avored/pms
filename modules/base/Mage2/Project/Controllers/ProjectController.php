<?php

namespace Mage2\Project\Controllers;

use Illuminate\Http\Request;
use Mage2\System\Http\Controllers\Controller;
use Mage2\Project\Models\Project;
use Mage2\Project\Requests\ProjectRequest;
use Mage2\Framework\DataGrid\DataGridFacade;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        $project = new Project();
        $dataGrid = DataGridFacade::make($project);
        return view('project.project.index')
                    ->with('projects', $projects)
                    ->with('dataGrid', $dataGrid)
                ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Project\Requests\ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest  $request)
    {
        Project::create($request->all());

        return redirect()->route('project.index')->with('notificationText', 'Project Created Successfully');
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
        $project = Project::findorfail($id);
        return view('project.project.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Project\Requests\ProjectRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::findorfail($id);
        $project->update($request->all());

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);

        return redirect()->route('project.index');
    }
}
