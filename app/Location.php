<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    
    public function sites() {
        return $this->morphToMany('App\Site', 'siteable');
    }
    
    public function asset() {
        return $this->hasMany('App\Asset');
    }
}
