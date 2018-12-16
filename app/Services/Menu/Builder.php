<?php
namespace App\Services\Menu;

use Illuminate\Support\Collection;

class Builder
{
    protected $collection;


    public function __construct()
    {
        $this->collection = Collection::make([]);
    }

    /**
     * Add Menu to Builder
     * @param string $key
     * @param callable $callable
     * @return $this
     */
    public function make($key, $callable)
    {
        $menu = new Menu($callable);
        $this->collection->put($key, $menu);

        return $this;
    }

    /**
     * Add Menu to Builder
     * @return \Illuminate\Support\Collection $collection
     */
    public function all()
    {
        return $this->collection;
    }
}
