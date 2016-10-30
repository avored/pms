<?php

namespace Mage2\User\Policies;

use Mage2\User\Models\AdminUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {

    use HandlesAuthorization;

    /**
     * Determine whether the user can view the user.
     *
     * @param  \Mage2\User\Models\AdminUser $adminUser
     * @return mixed
     */
    public function view(AdminUser $adminUser) {
        //
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \Mage2\User\Models\AdminUser $adminUser
     * @return mixed
     */
    public function create(AdminUser $adminUser) {
        //
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \Mage2\User\Models\AdminUser $adminUser
     * @return mixed
     */
    public function update(AdminUser $adminUser) {
        //
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \Mage2\User\Models\AdminUser $adminUser
     * @return mixed
     */
    public function delete(AdminUser $adminUser) {
        //
    }

}
