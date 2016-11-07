<?php

namespace Mage2\Project\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','description','assign_to_contact_id'];
}
