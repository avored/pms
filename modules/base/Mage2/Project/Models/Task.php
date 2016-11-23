<?php

namespace Mage2\Project\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\Project\Models\Project;
use Mage2\User\Models\AdminUser;
use Mage2\Setup\Models\TaskStatus;

class Task extends Model
{
    protected $fillable = ['project_id','admin_user_id','title','content','task_status_id'];
    
   
            
    /**
     * Project update belongs to Project
     * 
     * @return \Mage2\Project\Models\Project
     */

    public function project() {
        return $this->belongsTo(Project::class);
    }
    
    /**
     * Project update belongs to Admin User
     * 
     * @return \Mage2\Project\Models\Project
     */
    public function adminuser() {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }
}
