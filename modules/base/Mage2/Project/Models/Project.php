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
                    'start_date',
                    'end_date',
                    'project_status_id',
                    'project_priority_id'
    ];

    protected $dates = ['start_date','end_date','created_at','updated_at'];



    public function setStartDateAttribute($val) {
        $value = Carbon::createFromTimestamp(strtotime($val));
        $this->attributes['start_date'] = $value->toDateString();
    }


    public function getStartDateAttribute($val , $format = true) {
        $value = Carbon::createFromTimestamp(strtotime($val));

        if(true === $format) {
            return $value->format('d-M-Y');
        }

        return $value;
    }

    public function setEndDateAttribute($val) {
        $value = Carbon::createFromTimestamp(strtotime($val));
        $this->attributes['end_date'] = $value->toDateString();
    }

    public function getEndDateAttribute($val, $format = true) {

        $value = Carbon::createFromTimestamp(strtotime($val));

        if(true === $format) {
            return $value->format('d-M-Y');
        }

        return $value;
    }

    public function projectStatus() {
        return $this->belongsTo(ProjectStatus::class);
    }

    public function projectPriority() {
        return $this->belongsTo(ProjectPriority::class);
    }
}
