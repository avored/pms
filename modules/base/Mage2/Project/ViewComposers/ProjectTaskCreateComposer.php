<?php

namespace Mage2\Project\ViewComposers;

use Mage2\Setup\Models\TaskStatus;
use Illuminate\View\View;

class ProjectTaskCreateComposer
{
 
    /**
     * The status repository implementation.
     *
     * @var \Mage2\Setup\Models\TaskStatus
     */
    protected $status;

    /**
     * Create a new Project composer.
     *
     * @param  \Mage2\Setup\Models\TaskStatus $status
     * @return void
     */
    public function __construct(TaskStatus $status)
    {
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

        $taskStatusOptions =  [0 => 'Please Select'] +  $this->status->all()->pluck('name','id')->toArray();
        $view->with('taskStatusOptions', $taskStatusOptions);
    }
}