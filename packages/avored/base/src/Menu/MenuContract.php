<?php

namespace AvoRed\Base\Menu;

interface MenuContract
{
    /**
     * Get/Set Menu Key.
     * @return string $key
     */
    public function key();

    /**
     * Get/Set Menu Label.
     * @return string $label
     */
    public function label();

    /**
     * Get/Set Menu Icon.
     * @return string $icon
     */
    public function icon();

    /**
     * Get/Set Menu Route Name.
     * @return string $routeName
     */
    public function route();
}
