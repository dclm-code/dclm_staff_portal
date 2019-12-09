<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupLga extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['state_id','region_id',
        'local_govt_name','local_govt_code'];

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

    /**
     * Get the region for this model.
     *
     * @return App\Region
     */
    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id')->get();
    }


}