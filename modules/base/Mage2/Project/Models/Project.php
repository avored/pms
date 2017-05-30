<?php

namespace Mage2\Project\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
                    'name',
                    'description',
                    'start_date',
                    'end_date'
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

}
