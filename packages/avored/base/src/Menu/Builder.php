<?php

namespace AvoRed\Base\Menu;

use Illuminate\Support\Collection;

class Builder
{
    /**
     * Menu Collection.
     *
     * @var \Illuminate\Support\Collection
     */
    protected $menu;

    public function __construct()
    {
        $this->menu = Collection::make([]);
    }

    /**
     * Add Menu to a Collection
     *
     * @param string
     * @param callable $callable
     * @return \AvoRed\Framework\menu\menu
     */
    public function add($key, $callable)
    {
        $menu = new Menu($callable);

        $this->menu->put($key, $menu);

        return $this;
    }

    /**
     * Return Menu Object.
     *
     * @var string
     * @return \AvoRed\Framework\menu\menu
     */
    public function get($key)
    {
        return $this->menu->get($key);
    }

    /**
     * Return all available Menu in Menu.
     *
     *
     * @param void
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->menu->all();
    }

    /**
     * Return all available Menu in Menu.
     *
     *
     * @param void
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return $this->menu->all();
    }
}
