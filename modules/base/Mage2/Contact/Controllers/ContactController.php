<?php

namespace Mage2\Contact\Controllers;

use Mage2\Contact\Requests\ContactRequest;
use Mage2\Contact\Models\Contact;
use Mage2\Core\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

class ContactController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::eloquent(Contact::query())->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mage2contact::contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mage2contact::contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Mage2\Contact\Requests\ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->all());

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('mage2contact::contact.show')->with('contact', $contact);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('mage2contact::contact.edit')->with('contact', $contact);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Mage2\Contact\Requests\ContactRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        return redirect()->route('contact.index');
    }
}
