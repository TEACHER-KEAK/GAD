<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description', 
        'image', 
        'thumb_image',
        'is_admin',
        'type',
        'ordering',
        'status'
    ];
    
    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

}
