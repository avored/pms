<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Models\Status;
use Mage2\Setup\Requests\StatusReqest;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\User\Models\AdminUser;
use Illuminate\Support\Facades\Gate;
use Mage2\System\Controllers\Controller;

class StatusController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $model = new Status();
        $dataGrid = DataGrid::make($model);

        $dataGrid->addColumn(DataGrid::textColumn('name', 'Status Name', ['sortable' => 'asc']));
        $dataGrid->addColumn(DataGrid::textColumn('belongs_to', 'Status Belongs To'));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.status.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                        return "<a href='" . route('setup.status.edit', $row->id) . "'>Edit</a>";
                    }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.status.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                        return "<form method='post' action='" . route('setup.status.destroy', $row->id) . "'>" .
                                "<input type='hidden' name='_method' value='delete'/>" .
                                csrf_field() .
                                '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                                "</form>";
                    }));
        }
        return view('setup.status.index')
                        ->with('dataGrid', $dataGrid)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('setup.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\StatusReqest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusReqest $request) {
        
        Status::create($request->all());

        return redirect()->route('setup.status.index')->with('notificationText', 'Status Created Successfully');
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
        $status = Status::findorfail($id);

        return view('setup.status.edit')->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\StatusReqest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusReqest $request, $id) {
        $status = Status::findorfail($id);
        $status->update($request->all());

        return redirect()->route('setup.status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Status::destroy($id);

        return redirect()->route('setup.status.index');
    }

}
