<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = [
            'title',
            'description',
            'parent_id',
            'created_by',
            'updated_by',
            'status'
        ];
    
    public function createdBy(){
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function updatedBy(){
        return $this->belongsTo('App\User', 'updated_by');
    }
    
    public function categoryTranslation(){
        return $this->hasMany('App\CategoryTranslation','category_id');
    }
    
    public function contents(){
        return $this->hasMany('App\Content');
    }
    
    public function translation($language=null){
        if ($language == null) {
           $language = 'en';//App::getLocale();
        }
        return $this->hasMany('App\CategoryTranslation')->where('language_id', '=', $language);
    }
}
