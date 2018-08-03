<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFieldRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('account.profile.index');
    }

    public function edit() 
    {
        return view('account.profile.edit');
    }

    public function update(ProfileFieldRequest $request) 
    {
        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('profile.index');
    }
}
