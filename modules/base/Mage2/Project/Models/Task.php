<?php

namespace Mage2\Project\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Mage2\Setup\Models\ProjectPriority;
use Mage2\Setup\Models\ProjectStatus;

class Task extends Model
{
    protected $fillable = [
                    'name',
                    'description',
                    'project_id',
                    'due_date',
                    'created_by_user_id'
    ];

    protected $dates = ['due_date','created_at','updated_at'];



    public function setDueDateAttribute($val) {
        $value = Carbon::createFromTimestamp(strtotime($val));
        $this->attributes['due_date'] = $value->toDateString();
    }


    public function getDueDateAttribute($val , $format = true) {
        $value = Carbon::createFromTimestamp(strtotime($val));

        if(true === $format) {
            return $value->format('d-M-Y');
        }

        return $value;
    }


    public function projectTask() {
        return $this->belongsTo(Task::class);
    }

}
