<?php

namespace Mage2\Setup\Controllers;

use Mage2\Project\Requests\ProjectRequest;
use Mage2\Project\Models\Project;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class SetupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2setup::setup.index');
    }
}
