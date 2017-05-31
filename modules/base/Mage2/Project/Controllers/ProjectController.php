<?php

namespace Mage2\Project\Controllers;

use Mage2\Project\Requests\ProjectRequest;
use Mage2\Project\Models\Project;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ProjectController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::eloquent(Project::query())
                        ->addColumn('project_status', function($model){
                            return (isset($model->projectStatus->name)) ? $model->projectStatus->name : NULL;
                        })->addColumn('project_priority', function($model){
                            return (isset($model->projectPriority->name)) ? $model->projectPriority->name : NULL;
                        })->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2project::project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2project::project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Project\Requests\ProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('mage2project::project.show')->with('project', $project);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('mage2project::project.edit')->with('project', $project);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Project\Requests\ProjectRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::find($id);
        $project->update($request->all());

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);

        return redirect()->route('project.index');
    }
}
