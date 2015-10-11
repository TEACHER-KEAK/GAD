<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    public function createdBy(){
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function updatedBy(){
        return $this->belongsTo('App\User', 'updated_by');
    }
    
    public function translation($language=null){
        if ($language == null) {
           $language = App::getLocale();
        }
        return $this->hasMany('App\CategoryTranslation')->where('language_id', '=', $language);
    }
}
