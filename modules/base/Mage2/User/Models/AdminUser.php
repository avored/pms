<?php
namespace Mage2\User\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mage2\User\Models\Role;

class AdminUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute() {
        return $this->attributes['first_name'] . " " . $this->attributes['last_name'];
    }
    
    /**
     * Every user has one role.
     * 
     * @return \Mage2\User\Models\Role
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
