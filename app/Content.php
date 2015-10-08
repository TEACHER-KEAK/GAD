<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    // 1. SPECIFY THE TABLE NAME FOR STORING DATA Of Content Model
    protected $table = 'contents';
    
    public function createdBy(){
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function updatedBy(){
        return $this->belongsTo('App\User', 'created_by');
    }
    
   
}
