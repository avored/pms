<?php

namespace Mage2\User\Models;

use Illuminate\Database\Eloquent\Model;
use Mage2\User\Models\User;


class Role extends Model
{
    protected $fillable = ['name','description'];
    
    /**
     * Role can be assigne to many users
     * 
     * @return \Mage2\User\Models\User
     */
    public function user() {
        return $this->hasMany(User::class);
    }
}
