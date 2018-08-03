<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFieldRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileImageRequest;

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


    public function uploadImage() 
    {
        return view('account.profile.upload');
    }

    public function storeImage(ProfileImageRequest $request) 
    {
        $user = Auth::user();

        $dbPath = substr($request->file->store('public/user'),7);
        $user->update(['path' => $dbPath]);
       
        return redirect()->route('profile.index');
    }
}
