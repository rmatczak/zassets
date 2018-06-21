<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'status',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function role() {
        return $this->belongsTo('App\Role');
    }
    
    public function sites() {
        return $this->morphToMany('App\Site', 'siteable');
    }
    
    public function isAdmin() {
        
        if($this->role->name == "Administrator" && $this->status == 1){
            return true;
        }
        return false;
        
    }
}
