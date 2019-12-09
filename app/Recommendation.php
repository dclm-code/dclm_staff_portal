<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['staff_id','comments','date_recommended','date_effected'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the staff for this model.
     *
     * @return App\Staff
     */
    public function staff()
    {
        return $this->belongsTo('App\Staff', 'staff_id')->get();
    }


}