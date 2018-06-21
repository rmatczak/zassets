<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'adlogin',
        'department',
        'position'
    ];
    
    
    
    public function assets() {
        return $this->morphedByMany('App\Asset', 'ownerable');
    }
    public function documents() {
        return $this->morphedByMany('App\Document', 'ownerable');
    }    
}
