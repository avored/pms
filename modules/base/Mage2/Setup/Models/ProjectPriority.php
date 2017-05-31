<?php

namespace Mage2\Setup\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Mage2\Project\Models\Project;

class ProjectPriority extends Model
{
    protected $fillable = ['name'];


    public function projects() {
        return $this->hasMany(Project::class);
    }


}
