<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['staff_id','comments','discipline_date','date_restored'];

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