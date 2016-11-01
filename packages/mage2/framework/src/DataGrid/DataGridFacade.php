<?php
namespace Mage2\Framework\DataGrid;

use Illuminate\Support\Facades\Facade;
/**
 * @see \Collective\Html\FormBuilder
 */
class DataGridFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datagrid';
    }
}