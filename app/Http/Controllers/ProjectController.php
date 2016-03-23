<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;

class ProjectController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $projects = Project::enable()->get();
        return view('project.index')->with('projects', $projects);
    }

    public function create() {

        return view('project.create');
    }

    /**
     * @param ProjectRequest $request
     * 
     * 
     */
    public function store(ProjectRequest $request) {

        
        $project = Project::create($request->all());
        
        return $project;
        return redirect('/project');
    }

    public function edit($id) {

        $project = Project::findorfail($id);
        return view('project.edit')->with('project', $project);
    }

    /**
     * @param ProjectRequest $request
     *
     *
     */
    public function update($id , ProjectRequest $request) {


        //return $request->all();
        $project = Project::findorfail($id);
        $project->update($request->all());

        return redirect('/project');
    }



    /**
     * @param ProjectRequest $request
     *
     *
     */
    public function destroy($id) {


        $project = Project::findorfail($id);
        $project->update(['status' => 'DELETED']);

        return redirect('/project');
    }


    public function show($id) {

        $project = Project::findorfail($id);
        return view('project.show')->with('project', $project);
    }
}
