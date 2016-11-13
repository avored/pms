<?php

namespace Mage2\Project\Models;

use Mage2\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name','last_name','email','phone','address'];

    public function getFullNameAttribute() {
        return $this->attributes['first_name'] . " " . $this->attributes['last_name'];
    }
    
    /*
     * One contact can have many projects
     * 
     * @return
     */
    
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
