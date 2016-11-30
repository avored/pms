<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\WorkflowType;

class WorkflowStage extends Model
{
    protected $fillable = ['workflow_type_id','name'];
    
    
    public function workflowType() {
        $this->belongsTo(WorkflowType::class);
    }
}
