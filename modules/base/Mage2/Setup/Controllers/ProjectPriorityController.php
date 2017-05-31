<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Requests\ProjectPriorityRequest;
use Mage2\Setup\Models\ProjectPriority;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;


class ProjectPriorityController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(ProjectPriority::query())->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2setup::project-priority.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2setup::project-priority.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\ProjectPriorityRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectPriorityRequest $request)
    {
        ProjectPriority::create($request->all());

        return redirect()->route('setup.project-priority.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectPriority = ProjectPriority::find($id);

        return view('mage2setup::project-priority.edit')->with('projectPriority', $projectPriority);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\ProjectPriorityRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectPriorityRequest $request, $id)
    {
        $projectPriority = ProjectPriority::find($id);
        $projectPriority->update($request->all());

        return redirect()->route('setup.project-priority.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectPriority::destroy($id);

        return redirect()->route('setup.project-priority.index');
    }
}
