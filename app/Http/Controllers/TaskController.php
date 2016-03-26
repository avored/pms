<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;

class TaskController extends Controller
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
        $tasks = Task::enable()->get();
        return view('task.index')->with('tasks', $tasks);
    }

    public function create() {

        //$allPeoples  = People::all();
        //foreach($allPeoples as $people) {
        //    $peopleOptions[$people->id] = $people->first_name . " " . $people->last_name;
        //}

        return view('task.create')
            //->with('peopleOptions', $peopleOptions)
            ;
    }

    /**
     * @param TaskRequest $request
     * 
     * 
     */
    public function store(TaskRequest $request) {

        
        $task = Task::create($request->all());
        
        //$this->syncPeoples($task, $request->input('people'));
        //return $task;
        return redirect('/task');
    }

    public function edit($id) {

        $task = Task::findorfail($id);
        //$allPeoples  = People::all();
        //foreach($allPeoples as $people) {
        //    $peopleOptions[$people->id] = $people->first_name . " " . $people->last_name;
        //}

        //$taskPeople = $task->peoples()->lists('people_id')->toArray();



        return view('task.edit')->with('task', $task)
                                    //->with('taskPeople', $taskPeople)
                                    //->with('peopleOptions', $peopleOptions)
                                    ;
    }

    /**
     * @param TaskRequest $request
     *
     *
     */
    public function update($id , TaskRequest $request) {


        //return $request->all();
        $task = Task::findorfail($id);
        $task->update($request->all());

        //$this->syncPeoples($task, $request->input('people'));

        return redirect('/task');
    }



    /**
     * @param TaskRequest $request
     *
     *
     */
    public function destroy($id) {


        $task = Task::findorfail($id);
        $task->update(['status' => 'DELETED']);

        return redirect('/task');
    }


    public function show($id) {

        $task = Task::findorfail($id);
        return view('task.show')->with('task', $task);
    }


    /**
     * Sync up the list of peoples in the database
     *
     * @param  Task $task
     * @param  array   $peoples
     */
    private function syncPeoples(Task $task, array $peoples)
    {
        $task->peoples()->sync($peoples);
    }
}
