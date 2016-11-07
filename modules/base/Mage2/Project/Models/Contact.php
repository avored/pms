<?php

namespace Mage2\Project\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name','last_name','email','phone','address'];

    public function getFullNameAttribute() {
        return $this->attributes['first_name'] . " " . $this->attributes['last_name'];
    }
}
