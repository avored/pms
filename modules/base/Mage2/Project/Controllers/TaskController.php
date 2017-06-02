<?php

namespace Mage2\Project\Controllers;

use Illuminate\Support\Facades\Auth;
use Mage2\Project\Requests\TaskRequest;
use Mage2\Project\Models\Task;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TaskController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::eloquent(Task::query())->make(true);
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
        return view('mage2task::task.create');
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

        return view('mage2task::task.show')->with('task', $task);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('mage2task::task.edit')->with('task', $task);

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
        $task = Task::find($id);
        $task->update($request->all());

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);

        return redirect()->route('task.index');
    }
}
