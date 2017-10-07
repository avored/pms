<?php

namespace Mage2\Project\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\ProjectPriority;
use Mage2\Setup\Models\ProjectStatus;

class Project extends Model
{
    protected $fillable = [
                    'name',
                    'description',
                    'due_date',
                    'project_status_id',
                    'project_priority_id',
                    'assigned_to_user_id',
                    'created_by_user_id'
    ];

    protected $dates = ['due_date','created_at','updated_at'];


    public function getDueDateAttribute($val , $format = true) {
        $value = Carbon::createFromTimestamp(strtotime($val));

        if(true === $format) {
            return $value->format('d-M-Y');
        }

        return $value;
    }

    public function setDueDateAttribute($val) {
        $value = Carbon::createFromTimestamp(strtotime($val));
        $this->attributes['due_date'] = $value->toDateString();
    }

    public function projectStatus() {
        return $this->belongsTo(ProjectStatus::class);
    }


    public function tasks() {
        return $this->hasMany(Task::class);
    }


    public function projectPriority() {
        return $this->belongsTo(ProjectPriority::class);
    }
}
