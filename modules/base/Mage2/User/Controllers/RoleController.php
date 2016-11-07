<?php

namespace Mage2\User\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Mage2\User\Requests\RoleRequest;
use Mage2\User\Models\Role;
use Mage2\System\Controllers\Controller;
use Mage2\User\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Mage2\User\Models\AdminUser;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
class RoleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = new Role();
        $dataGrid = DataGrid::make($role);

        $dataGrid->addColumn(DataGrid::textColumn('name', 'Role Name',['sortable' => 'asc']));
        $dataGrid->addColumn(DataGrid::textColumn('description', 'Description'));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.role.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                return "<a href='" . route('setup.role.edit', $row->id) . "'>Edit</a>";
            }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.role.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                return "<form method='post' action='" . route('setup.role.destroy', $row->id) . "'>" .
                        "<input type='hidden' name='_method' value='delete'/>" .
                        csrf_field() .
                        '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                        "</form>";
            }));
        } 
        return view('user.role.index')->with('dataGrid', $dataGrid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Role\Requests\RoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest  $request)
    {
        Role::create($request->all());

        return redirect()->route('role.index')->with('notificationText', 'Role Created Successfully');
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
        $role = Role::findorfail($id);
        return view('user.role.edit')->with('role', $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\User\Requests\RoleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {


        $role = Role::findorfail($id);
        $role->update($request->all());

        if(count($request->get('permissions')) > 0) {
            $permissionIds = Collection::make([]);
            foreach ($request->get('permissions') as $key => $value) {
                //save it into db
                if ($value != 1) {
                    continue;
                }


                $permissions = explode(',', $key);

                foreach ($permissions as $permissionName) {
                    if(null === ($permissionModel = Permission::getPermissionByName($permissionName))) {
                        $permissionModel = Permission::create(['name' => $permissionName]);
                    }

                    if(!$permissionIds->contains($permissionModel->id)) {
                        $permissionIds->push($permissionModel->id);
                    }

                }

            }
        }

        $role->permissions()->sync($permissionIds->toArray());

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::destroy($id);

        return redirect()->route('role.index');
    }
}
