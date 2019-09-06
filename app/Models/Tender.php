<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use \BinaryCabin\LaravelUUID\Traits\HasUUID;


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tenders';
    protected $primaryKey = 'tender_id';
    protected $uuidFieldName = 'tender_code';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = ['tender_title', 'tender_description', 'tender_item_details', 'tender_expiration_date', 'tender_code'];
    // protected $hidden = [];
    protected $casts = [
        'tender_item_details' => 'object',
    ];
    protected $dates = [
        'tender_expiration_date',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

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
