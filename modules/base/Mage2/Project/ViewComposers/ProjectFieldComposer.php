<?php
namespace Mage2\Project\ViewComposers;

use Illuminate\Support\Collection;
use Illuminate\View\View;
use Mage2\Setup\Models\ProjectPriority;
use Mage2\Setup\Models\ProjectStatus;
use Mage2\User\Models\User;
class ProjectFieldComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $options                    = ['' => 'Please Select'] + ProjectStatus::all()->pluck('name','id')->toArray();
        $projectPrioritiesOption    = ['' => 'Please Select'] + ProjectPriority::all()->pluck('name','id')->toArray();
        $userOptions                = ['' => 'Please Select'] + User::all()->pluck('name','id')->toArray();


        $view->with('options', $options)
                ->with('projectPrioritiesOption', $projectPrioritiesOption)
                ->with('userOptions', $userOptions);
    }

}
