<?php

namespace Mage2\User\Controllers;

use Illuminate\Http\Request;
use Mage2\User\Models\AdminUser;
use Mage2\User\Requests\AdminUserRequest;
use Mage2\User\Models\Role;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\System\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
class AdminUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $adminUser = new AdminUser();
        $dataGrid = DataGrid::make($adminUser);

        $dataGrid->addColumn(DataGrid::textColumn('first_name', 'First Name',['sortable' => 'asc']));
        $dataGrid->addColumn(DataGrid::textColumn('last_name', 'Last Name'));
        $dataGrid->addColumn(DataGrid::textColumn('email', 'Email'));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.admin-user.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                return "<a href='" . route('setup.admin-user.edit', $row->id) . "'>Edit</a>";
            }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.admin-user.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                return "<form method='post' action='" . route('setup.admin-user.destroy', $row->id) . "'>" .
                        "<input type='hidden' name='_method' value='delete'/>" .
                        csrf_field() .
                        '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                        "</form>";
            }));
        } 
        return view('user.admin-user.index')->with('dataGrid', $dataGrid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->_getRoleOptions();
        return view('user.admin-user.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\AdminUser\Requests\AdminUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRequest  $request)
    {
        AdminUser::create($request->all());

        return redirect()->route('admin-user.index')->with('notificationText', 'Admin User Created Successfully');
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
        $adminUser = AdminUser::findorfail($id);
        $roles = $this->_getRoleOptions();
        return view('user.admin-user.edit')->with('adminUser', $adminUser)->with('roles', $roles);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\AdminUser\Requests\AdminUserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserRequest $request, $id)
    {
        $adminUser = AdminUser::findorfail($id);
        $adminUser->update($request->all());

        return redirect()->route('admin-user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminUser::destroy($id);

        return redirect()->route('admin-user.index');
    }
    
    private function _getRoleOptions() {
        $roles = Collection::make([0 => 'Please Select']);
        return $roles->merge(Role::all()->pluck('name','id'));
    }
}
