<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'aboutus';
    protected $primaryKey = 'about_us_id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = ['content_heading', 'content_description', 'content_image', 'fk_section_id', 'content_location'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function relatedSection()
    {
        return $this->belongsTo('App\Models\Section', 'fk_section_id', 'section_id');
    }
    public function relatedLocation()
    {
        return $this->belongsTo('App\Models\Location', 'content_location', 'location_id');
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

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
