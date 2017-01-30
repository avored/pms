<?php

namespace Mage2\Setup\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\WorkflowType;
use Kalnoy\Nestedset\NodeTrait;

class WorkflowStage extends Model
{
    use NodeTrait;

    protected $fillable = ['workflow_type_id','parent_id','name','_lft','_rgt'];
    
    
    public function workflowType() {
        $this->belongsTo(WorkflowType::class);
    }
    

}
