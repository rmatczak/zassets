<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable = [
        'subcategory_id',
        'name',
        'partnumber',
        'serial',
        'quantity',
        'asset_type',
        'status',
        'readiness',
        'location_id'
    ];
    
    public function coordinates() {
        return $this->hasOne('App\Coordinate');
    }
    
    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
    
    public function location() {
        return $this->belongsTo('App\Location');
        
    }
    
    public function subcategory() {
        return $this->belongsTo('App\Subcategory');
    }
    
    public function owners() {
        return $this->morphToMany('App\Owner', 'ownerable');
    }
}
