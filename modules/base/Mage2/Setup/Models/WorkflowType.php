<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\WorkflowStage;

class WorkflowType extends Model
{
    protected $fillable = ['name'];
    
    public function workflowStages() {
        $this->hasMany(WorkflowStage::class);
    }
}
