<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $fillable = [
        'document_id',
        'asset_id',
        'quantity'
    ];
    
    public function documents() {
        return $this->belongsTo('App\Document');        
    }
    
    public function assets() {
        return $this->belongsTo('App\Asset');        
    }
}
