<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Requests\ProjectStatusRequest;
use Mage2\Setup\Models\ProjectStatus;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;


class ProjectStatusController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(ProjectStatus::query())->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2setup::project-status.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2setup::project-status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\ProjectStatusRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStatusRequest $request)
    {
        ProjectStatus::create($request->all());

        return redirect()->route('setup.project-status.index');
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
        $projectStatus = ProjectStatus::find($id);

        return view('mage2setup::project-status.edit')->with('projectStatus', $projectStatus);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\ProjectStatusRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectStatusRequest $request, $id)
    {
        $project = ProjectStatus::find($id);
        $project->update($request->all());

        return redirect()->route('setup.project-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectStatus::destroy($id);

        return redirect()->route('setup.project-status.index');
    }
}
