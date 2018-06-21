<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    //
    protected $fillable = [
        'asset_id',
        'workbenchid'
    ];
    
    public function assets() {
        return $this->belongsTo('App\Asset');
    }
}
