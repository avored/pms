<?php

namespace Mage2\Project\Policies;

use Mage2\System\User;
use Mage2\Project\Models\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \Mage2\System\User  $user
     * @param  \Mage2\System\Project  $project
     * @return mixed
     */
    public function view(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \Mage2\System\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \Mage2\System\User  $user
     * @param  \Mage2\System\Project  $project
     * @return mixed
     */
    public function update(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \Mage2\System\User  $user
     * @param  \Mage2\System\Project  $project
     * @return mixed
     */
    public function delete(User $user, Project $project)
    {
        //
    }
}
