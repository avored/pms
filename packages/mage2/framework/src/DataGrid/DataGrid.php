<?php
namespace Mage2\Framework\DataGrid;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class DataGrid
{
    
    /**
     * Database table model
     * 
     * @var \Illuminate\Support\Collection
     */
    public $data;
    /**
     * Database table model
     * 
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;
    /**
     * Database table model
     * 
     * @var \Illuminate\Support\Collection
     */
    public $columns = NULL;
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
        $instance->data = $instance->model->paginate($instance->paginate);
       
        return $instance;
    }
    
    public function addColumn($column) {
        if(NULL === $this->columns) {
            $this->columns = Collection::make([]);
        }
        $this->columns->push($column);
        return $this;
    }
    
    public function addLink($row = false) {
        dd(is_callable($row));
        
         if($row && is_callable($row))
            return $return($label, $row);
    }

    public function paginate($recordPerPage = 10) {
        $this->data = $this->model->paginate($recordPerPage);
        
        return $this;
    }
    
    public function render() {
        return view('datagrid::grid')->with('dataGrid', $this);
    }
}