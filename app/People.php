<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = [
        'first_name',
        'last_name',
        'identifier',
        'home_phone',
        'mobile_phone',
        'email'
    ];


    /**
     * Get the projects associated with tie given people.
     *
     * @return \Illuminate\Datebase\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany('App\Projects');
    }
}
