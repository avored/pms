<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'title',
        'description',
        'status',
        'start_date',
        'deadline',
    ];

    protected $dates = ['start_date','deadline'];
    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEnable($query) {
        return $query->where('status', 'ENABLE');
    }

    /**
     * Set the published_at arttribute.
     *
     * @param $date
     */
    public function setStartDateAttribute($date) {
        //var_dump(Carbon::parse($date));die;
        $this->attributes['start_date'] = Carbon::parse($date);
    }
    /**
     * Set the published_at arttribute.
     *
     * @param $date
     */
    public function setDeadlineAttribute($date) {
        $this->attributes['deadline'] = Carbon::parse($date);
    }

    /**
     * Set the published_at arttribute.
     *
     * @param $date
     */
    public function getStartDateAttribute() {
        //var_dump(Carbon::parse($date));die;
        return Carbon::parse($this->attributes['start_date'])->format('d-m-Y');
    }
    /**
     * Set the published_at arttribute.
     *
     * @param $date
     */
    public function getDeadlineAttribute() {
        return Carbon::parse($this->attributes['deadline'])->format('d-m-Y');

    }

}
