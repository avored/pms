<?php

namespace Mage2\Project\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Project\Models\Project;

class ProjectUpdate extends Model
{
    protected $fillable = ['content','admin_user_id','project_id'];
    
    
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
