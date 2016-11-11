<?php

namespace Mage2\Setup\ViewComposers;
use Illuminate\View\View;

class StatusComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $statusBelongsToOptions =  ['' => 'Please Select','PROJECT' => 'Project','TASK' => 'Task'];

        $view->with('statusBelongsToOptions', $statusBelongsToOptions);
    }
}