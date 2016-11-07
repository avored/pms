<?php

namespace Mage2\Project\Controllers;

use Mage2\User\Models\AdminUser;
use Mage2\Project\Requests\ContactRequest;
use Illuminate\Support\Facades\Gate;
use Mage2\Framework\DataGrid\DataGridFacade as DataGrid;
use Mage2\Project\Models\Contact;
use Mage2\System\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Contact();
        $dataGrid = DataGrid::make($model);

        $dataGrid->addColumn(DataGrid::textColumn('first_name', 'First Name',['sortable' => 'asc']));
        $dataGrid->addColumn(DataGrid::textColumn('last_name', 'Last Name',['sortable' => 'asc']));
        $dataGrid->addColumn(DataGrid::textColumn('phone', 'Phone',['sortable' => 'asc']));

        if (Gate::allows('hasPermission', [AdminUser::class, "setup.contact.edit"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('edit', 'Edit', function ($row) {
                return "<a href='" . route('setup.contact.edit', $row->id) . "'>Edit</a>";
            }));
        }


        if (Gate::allows('hasPermission', [AdminUser::class, "setup.contact.destroy"])) {
            $dataGrid->addColumn(DataGrid::linkColumn('destroy', 'Destroy', function ($row) {
                return "<form method='post' action='" . route('setup.contact.destroy', $row->id) . "'>" .
                        "<input type='hidden' name='_method' value='delete'/>" .
                        csrf_field() .
                        '<a href="#" onclick="jQuery(this).parents(\'form:first\').submit()">Destroy</a>' .
                        "</form>";
            }));
        } 
        return view('project.contact.index')
                        ->with('dataGrid', $dataGrid)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('project.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Project\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request) {
        Contact::create($request->all());

        return redirect()->route('setup.contact.index')->with('notificationText', 'Contact Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $contact = Contact::findorfail($id);
        
        return view('project.contact.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Project\Requests\ContactRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id) {
        $contact = Contact::findorfail($id);
        $contact->update($request->all());

        return redirect()->route('setup.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Contact::destroy($id);

        return redirect()->route('setup.contact.index');
    }

}
