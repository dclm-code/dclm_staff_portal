<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['country_id','state_code','state_name'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the country for this model.
     *
     * @return App\Country
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id')->get();
    }


}