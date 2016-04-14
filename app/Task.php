<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'assign_to_people_id',
        'title',
        'description',
        'status',
        'start_date',
        'due_date',
    ];

    protected $dates = ['start_date','due_date'];
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
    public function setDueDateAttribute($date) {
        $this->attributes['due_date'] = Carbon::parse($date);
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
    public function getDueDateAttribute() {
        return Carbon::parse($this->attributes['due_date'])->format('d-m-Y');
    }

    /**
     * An Task is belongs to a Project.
     *
     * @return \Illuminate\Datebase\Eloquent\Relations\BelongsTo
     */
    public function Project()
    {
        return $this->belongsTo('App\Project');
    }

}