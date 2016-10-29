<?php

namespace Mage2\User\Controllers;

use Illuminate\Http\Request;
use Mage2\System\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mage2\User\Requests\UserRequest;


class MyAccountController extends Controller
{
    /**
     * Show the Users My Account Page/
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();


        return view('user.my-account.index')->with('user', $user);
    }

    /**
     * Show the Edit Users Page/
     *
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        $user = Auth::user();
        return view('user.my-account.edit')->with('user', $user);
    }
    /**
     * Show the Edit Users Page/
     * @param \Mage2\User\Requests\UserRequest
     * @return redirect
     */
    public function update(UserRequest $request) {
        return $request->all();
        $user = Auth::user();
        return view('user.my-account.edit')->with('user', $user);
    }
}
