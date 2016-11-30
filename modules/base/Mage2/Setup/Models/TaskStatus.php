<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
     protected $fillable = ['name'];
    
    public function getTaskStatus() {
        return $this->all();
    }
}
