<?php

namespace Mage2\Project\ViewComposers;
use Mage2\Project\Models\Contact;
use Mage2\Setup\Models\Status;
use Illuminate\View\View;

class ProjectComposer
{
    /**
     * The contact repository implementation.
     *
     * @var \Mage2\Project\Models\Contact
     */
    protected $contact;
    /**
     * The status repository implementation.
     *
     * @var \Mage2\Setup\Models\Status
     */
    protected $status;

    /**
     * Create a new Project composer.
     *
     * @param  \Mage2\Project\Models\Contact  $contact
     * @param  \Mage2\Setup\Models\Status  $contact
     * @return void
     */
    public function __construct(Contact $contact, Status $status)
    {
        $this->contact  = $contact;
        $this->status   = $status;


    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $projectStatusOptions =  [0 => 'Please Select'] +  $this->status->getProjectStatus()->pluck('name','id')->toArray();
        
        
        $conactOptions =  [0 => 'Please Select'] + $this->contact->all()->pluck('full_name','id')->toArray();

        $view->with('contactOptions', $conactOptions)->with('projectStatusOptions',$projectStatusOptions);
    }
}