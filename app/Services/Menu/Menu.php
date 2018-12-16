<?php

namespace App\Services\Menu;

class Menu
{
    /**
     * @var string $label
     */
    protected $label;
    /**
     * @var string $icon
     */
    protected $icon;
    /**
     * @var array $attributes
     */
    protected $attributes;
    /**
     * @var string $key
     */
    protected $key;
    /**
     * @var string $params
     */
    protected $params;
    /**
     * @var string $routeName
     */
    protected $routeName;
    /**
     *  AvoRed Front Menu Construct method.
     */
    public function __construct($callable)
    {
        $this->callback = $callable;
        $callable($this);
    }
    /**
     * Get/Set Admin Menu Label.
     *
     * @return \App\Services\Menu\Menu|string
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
     * Get/Set Admin Menu Identifier.
     *
     * @return \App\Services\Menu\Menu|string
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
     * Get/Set Admin Menu Route Name.
     *
     * @return \App\Services\Menu\Menu|string
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
     * Get/Set Admin Menu Route Params Name.
     *
     * @return \App\Services\Menu\Menu|string
     */
    public function params($params = null)
    {
        if (null !== $params) {
            $this->params = $params;
            return $this;
        }
        return $this->params;
    }
    /**
     * Get/Set Admin Menu Icon.
     *
     * @return \App\Services\Menu\Menu|string
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
     * Get/Set Admin Menu Icon.
     *
     * @return \App\Services\Menu\Menu|string
     */
    public function attributes($attributes = null)
    {
        if (null !== $attributes) {
            $this->attributes = $attributes;
            return $this;
        }
        return $this->attributes;
    }
}
