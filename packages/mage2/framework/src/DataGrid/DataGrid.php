<?php
namespace Mage2\Framework\DataGrid;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class DataGrid
{
    
    /**
     * Database table model
     * 
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;
    /**
     * Database table model
     * 
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $paginate = 10;


    /**
     * 
     * @param type $model
     * @return \Mage2\Framework\DataGrid\DataGrid
     * 
     */
    public static function make($model)
    {
        $instance = new static ;
        $instance->model = $model;
        
        return $instance;
    }
    
    public function paginate($recordPerPage = 10) {
        $this->paginate = 10;
    }
    
    public function render($recordPerPage = 10) {
        return view('datagrid::grid');
    }
}