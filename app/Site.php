<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $fillable = [
        'name',
        'shortname'
    ];
    
    public function address() {
        return $this->morphMany('App\Address', 'addressable');
    }
    
    public function locations() {
        return $this->morphedByMany('App\Location', 'siteable');
    }
    
    public function users() {
        return $this->morphedByMany('App\User', 'siteable');
    }
    
    
    
}
