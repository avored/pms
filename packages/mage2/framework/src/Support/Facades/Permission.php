<?php

namespace Mage2\Framework\Support\Facades;

/**
 * @see \Illuminate\Contracts\Auth\Access\Gate
 */
class Permission extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Mage2\Framework\Auth\Access\Permission';
    }
}
