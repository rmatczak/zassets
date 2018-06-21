<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    
    public function address() {
        return $this->morphMany('App\Address', 'addressable');        
    }
}
