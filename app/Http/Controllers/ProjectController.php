<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\StageRequest;
use App\Http\Requests\TaskRequest;

use App\Project;
use App\People;
use App\Task;
use App\Stage;

class ProjectController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $projects = Project::enable()->get();
        return view('project.index')->with('projects', $projects);
    }

    public function create() {

        $allPeoples = People::all();
        foreach ($allPeoples as $people) {
            $peopleOptions[$people->id] = $people->first_name . " " . $people->last_name;
        }

        return view('project.create')
                        ->with('peopleOptions', $peopleOptions);
    }

    /**
     * @param ProjectRequest $request
     *
     *
     */
    public function store(ProjectRequest $request) {


        $project = Project::create($request->all());

        //return $project;
        return redirect('/project');
    }

    public function edit($id) {

        $project = Project::findorfail($id);
        $allPeoples = People::all();
        foreach ($allPeoples as $people) {
            $peopleOptions[$people->id] = $people->first_name . " " . $people->last_name;
        }


        return view('project.edit')->with('project', $project)
                        ->with('peopleOptions', $peopleOptions);
    }

    /**
     * @param ProjectRequest $request
     *
     *
     */
    public function update($id, ProjectRequest $request) {


        //return $request->all();
        $project = Project::findorfail($id);
        $project->update($request->all());

        $this->syncPeoples($project, $request->input('people'));

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

    /**
     * Sync up the list of peoples in the database
     *
     * @param  Project $project
     * @param  array $peoples
     */
    private function syncPeoples(Project $project, array $peoples) {
        $project->peoples()->sync($peoples);
    }

    protected function getProjectView($project) {


        $view = view('project.show')->with('project', $project)
        ;

        return $view;
    }

    public function createTask($projectId) {

        $project = Project::findorfail($projectId);

        $view = $this->getProjectView($project);
        $view->with('taskCreate', true);

        return $view;
    }

    public function storeTask($projectId, TaskRequest $request) {

        $project = Project::findorfail($projectId);
        $task = Task::create($request->all());

        //$view = $this->getProjectView($project);

        return redirect('/project/' . $projectId);
    }

    public function storeStage($projectId, StageRequest $request) {

        $project = Project::findorfail($projectId);
        $request->merge(['project_id' => $projectId]);

        if(empty($request->get('parent_id')) === true) {
            $stage = Stage::findorfail($request->get('id'));
            $stage->update($request->all());

        } else {
            Stage::create($request->all());
        }


        //$view = $this->getProjectView($project);
        
        return redirect('/project/' . $projectId);
    }

}
