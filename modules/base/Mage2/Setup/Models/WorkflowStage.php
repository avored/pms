<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\WorkflowType;

class WorkflowStage extends Model
{
    protected $fillable = ['workflow_type_id','parent_id','name'];
    
    
    public function workflowType() {
        $this->belongsTo(WorkflowType::class);
    }
    
    public function getRootStagesByTypeId($workflowTypeId) {
        $rootStages = $this->where('workflow_type_id','=', $workflowTypeId)->get();
        
        return $rootStages;
    }
}
