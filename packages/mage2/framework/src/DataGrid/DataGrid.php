<?php
namespace Mage2\Framework\DataGrid;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Mage2\Framework\DataGrid\Columns\TextColumn;
use Mage2\Framework\DataGrid\Columns\LinkColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
     * @var \Illuminate\Http\Request
     */
    public $request;
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
        
        $instance = new static() ;
        $instance->model = $model;
        $instance->request = App::make('request');
        
        if($ascBy = $instance->request->get('asc')) {
            $instance->data = $instance->model->orderBy($ascBy, 'asc')->paginate($instance->paginate);
        } elseif($descBy = $instance->request->get('desc')) {
            $instance->data = $instance->model->orderBy($descBy, 'desc')->paginate($instance->paginate);
        } else {
            $instance->data =  $instance->model->paginate($instance->paginate);
        }
        
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
        
         //if($row && is_callable($row))
            //return $return($label, $row);
    }

    public static  function textColumn($identifier, $label, $extraAttributes = []) {
        return new TextColumn($identifier,$label,$extraAttributes);

    }


    public static  function linkColumn($identifier, $label, $callback) {
        return new LinkColumn($identifier,$label,$callback);
    }


    public function paginate($recordPerPage = 10) {
        $this->data = $this->model->paginate($recordPerPage);
        
        return $this;
    }
    
    public function render() {
        return view('datagridviews::grid')->with('dataGrid', $this);
    }
}