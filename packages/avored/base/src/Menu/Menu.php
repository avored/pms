<?php

namespace AvoRed\Base\Menu;

use AvoRed\Base\Menu\MenuContract;

class Menu implements MenuContract
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var array
     */
    protected $subMenu;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $routeName;

    /**
     *  AvoRed AdminMenu Construct method
     * 
     * @param mixed $callab|null
     */
    public function __construct($callable = null)
    {
        if (is_callable($callable)) {
            $callable($this);
        }
    }

    /**
     * Get/Set  Menu Label.
     * @param mixed $label|null
     * @return mixed \AvoRed\Base\Menu\Menu|string
     */
    public function label($label = null)
    {
        if (null !== $label) {
            $this->label = $label;

            return $this;
        }

        return $this->label;
    }

    /**
     * Get/Set Menu Identifier.
     * @param mixed $key|null
     * @return mixed \AvoRed\Base\Menu\Menu|string
     */
    public function key($key = null)
    {
        if (null !== $key) {
            $this->key = $key;

            return $this;
        }

        return $this->key;
    }

    /**
     * Get/Set Menu Route Name.
     * @param mixed $routeName|null
     * @return mixed \AvoRed\Base\Menu\Menu|string
     */
    public function route($routeName = null)
    {
        if (null !== $routeName) {
            $this->routeName = $routeName;

            return $this;
        }

        return $this->routeName;
    }

    /**
     * Get/Set Menu Icon.
     * @param mixed $icon|null
     * @return mixed \AvoRed\Base\Menu\Menu|string
     */
    public function icon($icon = null)
    {
        if (null !== $icon) {
            $this->icon = $icon;

            return $this;
        }

        return $this->icon;
    }

    /**
     * Get/Set  Menu Sub Menu.
     * @param mixed null|$key 
     * @param mixed null|$menuItem
     * @return mixed \AvoRed\Base\Menu\Menu|Collection
     */
    public function subMenu($key = null, $menuItem = null)
    {
        if (null === $menuItem) {
            return $this->subMenu;
        }

        if (is_callable($menuItem)) {
            $menu = new Menu($menuItem);
            $this->subMenu[$key] = $menu;
        } else {
            $this->subMenu[$key] = $menuItem;
        }

        return $this;
    }

    /**
     * To Check If Menu has Sub menu.
     *
     * @return bool
     */
    public function hasSubMenu()
    {
       
       if(null !== $this->subMenu && count($this->subMenu) >= 0) {
           return true;
       }

       return false;
    }
}
