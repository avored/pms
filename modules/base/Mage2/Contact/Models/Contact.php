<?php

namespace Mage2\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
                    'first_name',
                    'last_name',
                    'email'
    ];

}
