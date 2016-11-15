<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['belongs_to','name','is_default','is_completed'];
    
    
    public function getProjectStatus() {
        return $this->where('belongs_to','=','PROJECT')->get();
    }
    
    
    public function getTaskStatus() {
        return $this->where('belongs_to','=','Task')->get();
    }
}
