<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\People;
use App\Http\Requests\PeopleRequest;
use App\Http\Requests;

class PeopleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $peoples = People::all();
        return view('people.index')->with('peoples', $peoples);
    }

    public function create() {

        return view('people.create');
    }

    /**
     * @param PeopleRequest $request
     *
     *
     */
    public function store(PeopleRequest $request) {


        $people = People::create($request->all());

        //return $people;
        return redirect('/people');
    }

    public function edit($id) {

        $people = People::findorfail($id);
        return view('people.edit')->with('people', $people);
    }

    /**
     * @param PeopleRequest $request
     *
     *
     */
    public function update($id , PeopleRequest $request) {


        //return $request->all();
        $people = People::findorfail($id);
        $people->update($request->all());

        return redirect('/people');
    }



    /**
     * @param PeopleRequest $request
     *
     *
     */
    public function destroy($id) {


        $people = People::findorfail($id);
        $people->update(['status' => 'DELETED']);

        return redirect('/people');
    }


    public function show($id) {

        $people = People::findorfail($id);
        return view('people.show')->with('people', $people);
    }
}
