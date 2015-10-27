<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
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
    
    protected $dates = ['deleted_at'];
}
