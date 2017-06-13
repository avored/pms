<?php

namespace Mage2\Project\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mage2\Project\Requests\TaskRequest;
use Mage2\Project\Models\Task;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use Mage2\Project\Models\Project;

class ProjectTaskController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(Request $request)
    {
        $project = Project::find($request->get('project_id'));

        return Datatables::of($project->tasks)
            ->addColumn('due_date', function($model){
                //dd($model->due_date);
                return $model->due_date;
            })->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2task::task.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2project::task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Project\Requests\TaskRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {

        $request->merge(['created_by_user_id' => Auth::user()->id]);
        Task::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        return view('mage2project::task.show')->with('task', $task);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

        $project = Project::find($request->get('project_id'));
        $task = Task::find($id);
        $viewPath = "mage2project::task.edit";

        return view('mage2project::project.show')
                ->with('task', $task)
                ->with('project', $project)
                ->with('viewPath', $viewPath);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Project\Requests\TaskRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        $project = Project::find($request->get('project_id'));
        $task = Task::find($id);
        $task->update($request->all());

        return redirect()->route('project.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $project = Project::find($request->get('project_id'));
        Task::destroy($id);

        return redirect()->route('project.show', $project->id);
    }
}
