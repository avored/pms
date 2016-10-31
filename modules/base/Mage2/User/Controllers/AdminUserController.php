<?php

namespace Mage2\User\Controllers;

use Illuminate\Http\Request;
use Mage2\User\Models\AdminUser;
use Mage2\User\Requests\AdminUserRequest;
use Mage2\User\Models\Role;
use Mage2\System\Http\Controllers\Controller;

class AdminUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminUsers = AdminUser::paginate(10);
        return view('user.admin-user.index')->with('adminUsers', $adminUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name','id');
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
        $roles = Role::all()->pluck('name','id');
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
}
