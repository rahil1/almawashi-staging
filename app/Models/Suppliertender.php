<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliertender extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'suppliertender';
    protected $primaryKey = 'suppliertender_id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['fk_user_id', 'fk_tender_id', 'quantity' ,'unit' ,'spec', 'unit_price'];
    // protected $hidden = [];
    // protected $dates = [];

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
    public function getTenderTitle()
    {
        $tender = $this->belongsTo('App\Models\Tender', 'fk_tender_id', 'tender_id');
        return $tender_title = $tender->first()->tender_title;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
