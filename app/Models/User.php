<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name' ,'email', 'password', 'path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected   function getFullNameAttribute() 
    {
        return $this->attributes['first_name'] . " " . $this->attributes['last_name'];
    }
    protected   function getPathAttribute($val) 
    {
        if($val == null || $val == "") {
            return "https://www.placehold.it/250x250";
        }

        return "storage" . DIRECTORY_SEPARATOR .  $val;
    }
}
