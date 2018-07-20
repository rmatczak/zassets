<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $fillable = [
        'number',
        'doctype_id',
        'user_id',
        'destsite',
        'vendor_id',
        'status',
        'ticket',
    ];
    
    public function doctype() {
        return $this->belongsTo('App\Doctype');
    }
    
    public function owner() {
        return $this->morphToMany('App\Owner', 'ownerable');
    }
    
    public function sites() {
        return $this->morphToMany('App\Site', 'siteable');
    }
    
    public function positions() {
        return $this->hasMany('App\Position');
    }
    
    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }
}
