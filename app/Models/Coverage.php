<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Coverage extends Model
{


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'coverages';
    protected $primaryKey = 'media_id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = ['media_title', 'media_s_description', 'media_l_description', 'media_image', 'media_video', 'fk_section_id'];
    // protected $hidden = [];
    protected $dates = [
        'created_at'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function relatedSection()
    {
        return $this->belongsTo('App\Models\Section', 'fk_section_id', 'section_id');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getMediaTypeString()
    {
        return $this->belongsTo('App\Models\MediaType', 'fk_media_type', 'media_type_id');
        
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
