<?php

namespace Mage2\Project\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','description','assign_to_contact_id','due_date'];
        
    protected $dates = ['due_date','updated_at','created_at'];
}
