<?php

namespace Mage2\Project\ViewComposers;
use Mage2\Project\Models\Contact;
use Illuminate\View\View;

class ProjectComposer
{
    /**
     * The user repository implementation.
     *
     * @var \Mage2\Project\Models\Contact
     */
    protected $contact;

    /**
     * Create a new Project composer.
     *
     * @param  \Mage2\Project\Models\Contact  $contact
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;


    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $conactOptions =  [0 => 'Please Select'] + $this->contact->all()->pluck('full_name','id')->toArray();

        $view->with('contactOptions', $conactOptions);
    }
}