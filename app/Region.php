<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['region_code','region_name','state_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the state for this model.
     *
     * @return App\State
     */
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id')->get();
    }


}