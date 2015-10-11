<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentTranslation extends Model
{
    protected $table = 'content_translations';
    
    public function content(){
        return $this->belongsTo('App\Content', 'content_id');
    }
}
