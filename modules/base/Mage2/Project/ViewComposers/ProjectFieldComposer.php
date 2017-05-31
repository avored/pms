<?php
namespace Mage2\Project\ViewComposers;

use Illuminate\Support\Collection;
use Illuminate\View\View;
use Mage2\Setup\Models\ProjectPriority;
use Mage2\Setup\Models\ProjectStatus;

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
        $options = Collection::make(['' => 'Please Select'])->merge(ProjectStatus::all()->pluck('name','id'));
        $projectPrioritiesOption = Collection::make(['' => 'Please Select'])->merge(ProjectPriority::all()->pluck('name','id'));

        $view->with('options', $options)
                ->with('projectPrioritiesOption', $projectPrioritiesOption);
    }

}
