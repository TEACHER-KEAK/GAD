<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';
    
    protected $fillable=[
        'title',
        'type',
        'parent_id',
        'position',
        'status',
        'internal_url',
        'external_url',
        'icon',
        'ordering',
        'level',
        'created_by',
        'updated_by'
    ];
    
    protected $nullable = [
        'parent_id',
        'updated_by',
        'internal_url',
        'external_url',
        'icon'
    ];
    
    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }
    
    public function menuTranslation(){
        return $this->hasMany('App\MenuTranslation', 'menu_id');
    }
    
    public function translation($language=null){
        if ($language == null) {
           $language = App::getLocale();
        }
        return $this->hasMany('App\MenuTranslation')->where('language_id', '=', $language);
    }
    
    public function menu(){
        return $this->belongsTo('App\Menu', 'parent_id');
    }
    
}
