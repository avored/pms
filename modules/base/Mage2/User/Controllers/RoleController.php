<?php

namespace Mage2\User\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Mage2\User\Requests\RoleRequest;
use Mage2\User\Models\Role;
use Mage2\System\Controllers\Controller;
use Mage2\User\Models\Permission;

class RoleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('user.role.index')->with('roles', $roles);
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
