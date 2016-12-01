<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\WorkflowType;

class WorkflowStage extends Model
{
    protected $fillable = ['workflow_type_id','previous_stage','name'];
    
    
    public function workflowType() {
        $this->belongsTo(WorkflowType::class);
    }
    
    public function getRootStagesByTypeId($workflowTypeId) {
        $rootStages = $this->where('workflow_type_id','=', $workflowTypeId)
                            ->where('previous_stage','=', 0)->get();
        
        return $rootStages;
    }
}
