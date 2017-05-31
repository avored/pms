<?php

namespace Mage2\Setup\Controllers;

use Mage2\Setup\Requests\UserRequest;
use Mage2\User\Models\User;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;


class UserController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2setup::user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2setup::user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Setup\Requests\UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->merge(['password' => bcrypt($request->get('password'))]);
        User::create($request->all());

        return redirect()->route('setup.user.index');
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
        $user = User::find($id);

        return view('mage2setup::user.edit')->with('user', $user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Setup\Requests\UserRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('setup.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('setup.user.index');
    }
}
