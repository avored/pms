<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model {
    protected $fillable = ['name'];
    
    public function getProjectStatus() {
        return $this->all();
    }
}
