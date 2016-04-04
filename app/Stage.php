<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
        'parent_id',
        'project_id',
        'title'
    ];
    
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
