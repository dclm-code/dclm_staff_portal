<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['department_id','model','plate',
        'milage','litre','admin','audit','store','dispenser',
        'litre_dispensed'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the department for this model.
     *
     * @return App\Department
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id')->get();
    }


}